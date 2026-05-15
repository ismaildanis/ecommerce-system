<?php

namespace Tests\Unit\Checkout;

use App\Jobs\OrderPlacementJob;
use App\Models\CheckoutSession;
use App\Models\PaymentMethod;
use App\Models\User;
use App\Repositories\Contracts\Inventory\InventoryRepositoryInterface;
use App\Repositories\Contracts\Payment\PaymentMethodRepositoryInterface;
use App\Repositories\Contracts\User\AddressesRepositoryInterface;
use App\Services\Checkout\CheckoutPaymentService;
use App\Services\Checkout\CheckoutSessionService;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Mockery;
use Tests\TestCase;

class CheckoutSessionServiceTest extends TestCase
{
    use DatabaseTransactions;

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_create_payment_intent_propagates_gateway_error_for_invalid_card_or_insufficient_funds(): void
    {
        $user = $this->makeUser();
        $session = $this->makeSession($user);

        $addressesRepo = Mockery::mock(AddressesRepositoryInterface::class);
        $paymentMethods = Mockery::mock(PaymentMethodRepositoryInterface::class);
        $inventories = Mockery::mock(InventoryRepositoryInterface::class);
        $checkoutPaymentService = Mockery::mock(CheckoutPaymentService::class);

        $tempMethod = new PaymentMethod(['provider' => 'iyzico']);

        $checkoutPaymentService->shouldReceive('buildTemporaryMethodFromData')
            ->once()
            ->andReturn($tempMethod);

        $checkoutPaymentService->shouldReceive('createPaymentIntent')
            ->once()
            ->andThrow(new \RuntimeException('Ödeme başarısız.'));

        $service = new CheckoutSessionService(
            $addressesRepo,
            $paymentMethods,
            $checkoutPaymentService,
            $inventories
        );

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Ödeme başarısız.');

        $service->createPaymentIntent($user, [
            'session_id' => $session->id,
            'payment_method' => 'new_card',
            'card_number' => '5528790000000008',
            'expire_month' => '12',
            'expire_year' => '2030',
            'card_holder_name' => 'Test User',
            'cvv' => '123',
            'save_card' => false,
        ]);
    }

    public function test_create_payment_intent_sets_pending_3ds_and_does_not_dispatch_order_job(): void
    {
        Bus::fake();

        $user = $this->makeUser();
        $session = $this->makeSession($user);

        $addressesRepo = Mockery::mock(AddressesRepositoryInterface::class);
        $paymentMethods = Mockery::mock(PaymentMethodRepositoryInterface::class);
        $inventories = Mockery::mock(InventoryRepositoryInterface::class);
        $checkoutPaymentService = Mockery::mock(CheckoutPaymentService::class);

        $tempMethod = new PaymentMethod(['provider' => 'iyzico']);

        $checkoutPaymentService->shouldReceive('buildTemporaryMethodFromData')->once()->andReturn($tempMethod);
        $checkoutPaymentService->shouldReceive('createPaymentIntent')->once()->andReturn([
            'provider' => 'iyzico',
            'status' => 'success',
            'requires_3ds' => true,
            'conversation_id' => 'conv_1',
            'payment_id' => 'pay_1',
            'amount_cents' => 1000,
        ]);

        $service = new CheckoutSessionService(
            $addressesRepo,
            $paymentMethods,
            $checkoutPaymentService,
            $inventories
        );

        $result = $service->createPaymentIntent($user, [
            'session_id' => $session->id,
            'payment_method' => 'new_card',
            'card_number' => '5528790000000008',
            'expire_month' => '12',
            'expire_year' => '2030',
            'card_holder_name' => 'Test User',
            'cvv' => '123',
            'save_card' => false,
        ]);

        $this->assertSame('pending_3ds', $result->status);
        Bus::assertNotDispatched(OrderPlacementJob::class);
    }

    public function test_create_payment_intent_sets_confirmed_and_dispatches_order_job_when_not_3ds(): void
    {
        Bus::fake();

        $user = $this->makeUser();
        $session = $this->makeSession($user);

        $addressesRepo = Mockery::mock(AddressesRepositoryInterface::class);
        $paymentMethods = Mockery::mock(PaymentMethodRepositoryInterface::class);
        $inventories = Mockery::mock(InventoryRepositoryInterface::class);
        $checkoutPaymentService = Mockery::mock(CheckoutPaymentService::class);

        $tempMethod = new PaymentMethod(['provider' => 'iyzico']);

        $checkoutPaymentService->shouldReceive('buildTemporaryMethodFromData')->once()->andReturn($tempMethod);
        $checkoutPaymentService->shouldReceive('createPaymentIntent')->once()->andReturn([
            'provider' => 'iyzico',
            'status' => 'success',
            'requires_3ds' => false,
            'conversation_id' => 'conv_2',
            'payment_id' => 'pay_2',
            'amount_cents' => 1000,
        ]);

        $service = new CheckoutSessionService(
            $addressesRepo,
            $paymentMethods,
            $checkoutPaymentService,
            $inventories
        );

        $result = $service->createPaymentIntent($user, [
            'session_id' => $session->id,
            'payment_method' => 'new_card',
            'card_number' => '5528790000000008',
            'expire_month' => '12',
            'expire_year' => '2030',
            'card_holder_name' => 'Test User',
            'cvv' => '123',
            'save_card' => false,
        ]);

        $this->assertSame('confirmed', $result->status);
        Bus::assertDispatched(OrderPlacementJob::class);
    }

    private function makeUser(): User
    {
        $user = new User;
        $user->first_name = 'Test';
        $user->last_name = 'User';
        $user->username = 'u_'.Str::lower(Str::random(8));
        $user->email = Str::lower(Str::random(8)).'@example.com';
        $user->password = Hash::make('secret123');
        $user->phone = '5551112233';
        $user->save();

        return $user;
    }

    private function makeSession(User $user): CheckoutSession
    {
        $session = new CheckoutSession;
        $session->id = (string) Str::uuid();
        $session->user_id = $user->id;
        $session->status = 'pending';
        $session->expires_at = now()->addHour();
        $session->bag_snapshot = [
            'items' => [],
            'totals' => ['final_cents' => 1000],
        ];
        $session->save();

        return $session;
    }
}
