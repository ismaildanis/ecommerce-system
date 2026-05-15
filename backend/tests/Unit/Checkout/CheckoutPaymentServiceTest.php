<?php

namespace Tests\Unit\Checkout;

use App\Models\CheckoutSession;
use App\Models\PaymentMethod;
use App\Models\PaymentProvider;
use App\Models\User;
use App\Repositories\Contracts\Inventory\InventoryRepositoryInterface;
use App\Repositories\Contracts\Payment\PaymentMethodRepositoryInterface;
use App\Repositories\Contracts\Payment\PaymentProviderRepositoryInterface;
use App\Repositories\Contracts\User\AddressesRepositoryInterface;
use App\Services\Checkout\CheckoutPaymentService;
use App\Services\Checkout\CheckoutSessionService;
use App\Services\Payments\Contracts\PaymentGatewayInterface;
use Mockery;
use Tests\TestCase;

class CheckoutPaymentServiceTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_build_temporary_method_calls_gateway(): void
    {
        $user = User::factory()->make();
        $provider = new PaymentProvider(['code' => 'iyzico']);

        $repo = Mockery::mock(PaymentProviderRepositoryInterface::class);
        $repo->shouldReceive('findActiveByCode')->once()->with('iyzico')->andReturn($provider);

        $gateway = Mockery::mock(PaymentGatewayInterface::class);
        $tempMethod = new PaymentMethod;

        $gateway->shouldReceive('buildTemporaryMethod')
            ->once()
            ->with($user, Mockery::type('array'))
            ->andReturn($tempMethod);

        app()->bind(PaymentGatewayInterface::class, function ($app, $params) use ($gateway, $provider) {
            $this->assertSame($provider, $params['provider']);

            return $gateway;
        });

        $service = new CheckoutPaymentService($repo);
        $result = $service->buildTemporaryMethodFromData($user, ['provider' => 'iyzico']);

        $this->assertSame($tempMethod, $result);
    }

    public function test_throws_when_provider_not_found(): void
    {
        $repo = Mockery::mock(PaymentProviderRepositoryInterface::class);
        $repo->shouldReceive('findActiveByCode')->once()->with('iyzico')->andReturn(null);

        $service = new CheckoutPaymentService($repo);

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Aktif ödeme sağlayıcısı bulunamadı.');

        $service->buildTemporaryMethodFromData(User::factory()->make(), ['provider' => 'iyzico']);
    }

    public function test_create_payment_intent_calls_gateway_process_payment(): void
    {
        $user = User::factory()->make();
        $provider = new PaymentProvider(['code' => 'iyzico']);

        $paymentMethod = new PaymentMethod;
        $paymentMethod->provider = 'iyzico';

        $session = new CheckoutSession;

        $repo = Mockery::mock(PaymentProviderRepositoryInterface::class);
        $repo->shouldReceive('findActiveByCode')->once()->with('iyzico')->andReturn($provider);

        $gateway = Mockery::mock(PaymentGatewayInterface::class);
        $expected = ['status' => 'ok'];

        $gateway->shouldReceive('processPayment')
            ->once()
            ->with($user, $session, $paymentMethod, ['installment' => 1])
            ->andReturn($expected);

        app()->bind(PaymentGatewayInterface::class, function ($app, $params) use ($gateway, $provider) {
            $this->assertSame($provider, $params['provider']);

            return $gateway;
        });

        $service = new CheckoutPaymentService($repo);

        $result = $service->createPaymentIntent($user, $session, $paymentMethod, ['installment' => 1]);

        $this->assertSame($expected, $result);
    }

    public function test_confirm_payment_intent_calls_gateway_confirm_payment(): void
    {
        $provider = new PaymentProvider(['code' => 'iyzico']);

        $session = new CheckoutSession;
        $session->payment_data = ['provider' => 'iyzico'];

        $payload = ['conversationId' => 'abc'];
        $expected = ['status' => 'success'];

        $repo = Mockery::mock(PaymentProviderRepositoryInterface::class);
        $repo->shouldReceive('findActiveByCode')->once()->with('iyzico')->andReturn($provider);

        $gateway = Mockery::mock(PaymentGatewayInterface::class);
        $gateway->shouldReceive('confirmPayment')
            ->once()
            ->with($session, $payload)
            ->andReturn($expected);

        app()->bind(PaymentGatewayInterface::class, function ($app, $params) use ($gateway, $provider) {
            $this->assertSame($provider, $params['provider']);

            return $gateway;
        });

        $service = new CheckoutPaymentService($repo);

        $result = $service->confirmPaymentIntent($session, $payload);

        $this->assertSame($expected, $result);
    }

    public function test_create_session_throws_when_stock_is_insufficient(): void
    {
        $user = User::factory()->make(['id' => 10]);

        $addressesRepo = Mockery::mock(AddressesRepositoryInterface::class);
        $paymentMethods = Mockery::mock(PaymentMethodRepositoryInterface::class);
        $checkoutPaymentService = Mockery::mock(CheckoutPaymentService::class);
        $inventories = Mockery::mock(InventoryRepositoryInterface::class);

        $inventories->shouldReceive('checkStock')
            ->once()
            ->with(101, 2)
            ->andReturn(false);

        $service = new CheckoutSessionService(
            $addressesRepo,
            $paymentMethods,
            $checkoutPaymentService,
            $inventories
        );

        $bagData = [
            'products' => collect([
                (object) [
                    'variant_size_id' => 101,
                    'quantity' => 2,
                ],
            ]),
        ];

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Stoklar yetersiz. Lütfen sepeti kontrol ediniz.');

        $service->createSession($user, $bagData);
    }
}
