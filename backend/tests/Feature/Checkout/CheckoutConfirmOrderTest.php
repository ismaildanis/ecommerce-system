<?php

namespace Tests\Feature\Checkout;

use App\Jobs\OrderPlacementJob;
use App\Models\CheckoutSession;
use App\Models\User;
use App\Services\Checkout\CheckoutSessionService;
use Illuminate\Support\Facades\Bus;
use Mockery;
use Tests\TestCase;

class CheckoutConfirmOrderTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_confirm_order_dispatches_job_when_payment_confirmed(): void
    {
        Bus::fake();

        $user = new User;
        $user->id = 10;

        $session = new CheckoutSession;
        $session->id = 'sess_1';
        $session->user_id = 10;
        $session->status = 'confirmed';
        $session->setRelation('user', $user);

        $mock = Mockery::mock(CheckoutSessionService::class);
        $mock->shouldReceive('confirmPaymentIntent')
            ->once()
            ->andReturn($session);

        $this->app->instance(CheckoutSessionService::class, $mock);

        $response = $this->postJson('/api/checkout/confirm', [
            'conversationId' => 'conv_1',
            'paymentId' => 'pay_1',
            'mdStatus' => '1',
        ]);

        $response->assertOk()
            ->assertJson([
                'status' => 'success',
            ]);

        Bus::assertDispatched(OrderPlacementJob::class);
    }

    public function test_confirm_order_returns_422_when_session_not_confirmed(): void
    {
        Bus::fake();

        $session = new CheckoutSession;
        $session->id = 'sess_1';
        $session->status = 'pending_3ds';

        $mock = Mockery::mock(CheckoutSessionService::class);
        $mock->shouldReceive('confirmPaymentIntent')
            ->once()
            ->andReturn($session);

        $this->app->instance(CheckoutSessionService::class, $mock);

        $response = $this->postJson('/api/checkout/confirm', [
            'conversationId' => 'conv_1',
            'paymentId' => 'pay_1',
            'mdStatus' => '0',
        ]);

        $response->assertStatus(422)
            ->assertJson([
                'status' => 'error',
            ]);

        Bus::assertNotDispatched(OrderPlacementJob::class);
    }
}
