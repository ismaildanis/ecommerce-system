<?php

namespace Tests\Feature\Checkout;

use App\Models\CheckoutSession;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Services\Bag\Contracts\BagInterface;
use App\Services\Checkout\CheckoutSessionService;
use App\Services\Checkout\Orders\OrderPlacementService;
use Mockery;
use Tests\TestCase;

class CheckoutPaymentIntentFeatureTest extends TestCase
{
    use DatabaseTransactions;
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_create_payment_intent_returns_422_for_invalid_payload(): void
    {
        $this->withoutMiddleware();

        $user = User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
        ]);
        assert($user instanceof User);
        $this->actingAs($user, 'user');

        $bag = Mockery::mock(BagInterface::class);
        $checkout = Mockery::mock(CheckoutSessionService::class);
        $orderPlacement = Mockery::mock(OrderPlacementService::class);

        $checkout->shouldNotReceive('createPaymentIntent');

        $this->app->instance(BagInterface::class, $bag);
        $this->app->instance(CheckoutSessionService::class, $checkout);
        $this->app->instance(OrderPlacementService::class, $orderPlacement);

        $response = $this->postJson('/api/checkout/payment-intent', []);

        $response->assertStatus(422)
            ->assertJsonStructure(['message', 'errors'])
            ->assertJsonValidationErrors(['session_id', 'payment_method', 'requires_3ds']);
    }

    public function test_create_payment_intent_returns_session_payload_when_valid(): void
    {
        $this->withoutMiddleware();

        $user = User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
        ]);
        assert($user instanceof User);
        $this->actingAs($user, 'user');

        $session = new CheckoutSession;
        $session->id = '22222222-2222-2222-2222-222222222222';
        $session->status = 'pending_3ds';
        $session->payment_data = [
            'provider' => 'iyzico',
            'status' => 'success',
            'intent' => ['payment_id' => 'pay_1'],
        ];

        $bag = Mockery::mock(BagInterface::class);
        $orderPlacement = Mockery::mock(OrderPlacementService::class);

        $checkout = Mockery::mock(CheckoutSessionService::class);
        $checkout->shouldReceive('createPaymentIntent')
            ->once()
            ->andReturn($session);

        $this->app->instance(BagInterface::class, $bag);
        $this->app->instance(CheckoutSessionService::class, $checkout);
        $this->app->instance(OrderPlacementService::class, $orderPlacement);

        $response = $this->postJson('/api/checkout/payment-intent', [
            'session_id' => '33333333-3333-4333-8333-333333333333',
            'payment_method' => 'new_card',
            'provider' => 'iyzico',
            'card_number' => '5528790000000008',
            'card_holder_name' => 'Test User',
            'expire_month' => '12',
            'expire_year' => '2030',
            'cvv' => '123',
            'save_card' => false,
            'requires_3ds' => true,
            'installment' => 1,
        ]);

        $response->assertOk()
            ->assertJsonPath('session_id', '22222222-2222-2222-2222-222222222222')
            ->assertJsonPath('status', 'pending_3ds')
            ->assertJsonStructure(['session_id', 'status', 'payment_data']);
    }
}
