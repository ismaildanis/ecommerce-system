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

class CheckoutSessionFeatureTest extends TestCase
{
    use DatabaseTransactions;
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_create_session_returns_422_when_bag_is_empty(): void
    {
        $this->withoutMiddleware();

        $user = User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
        ]);
        assert($user instanceof User);
        $this->actingAs($user, 'user');

        $bag = Mockery::mock(BagInterface::class);
        $bag->shouldReceive('getBag')->once()->andReturn([
            'products' => [],
        ]);

        $checkout = Mockery::mock(CheckoutSessionService::class);
        $checkout->shouldNotReceive('createSession');

        $orderPlacement = Mockery::mock(OrderPlacementService::class);

        // No auth binding
        $this->app->instance(BagInterface::class, $bag);
        $this->app->instance(CheckoutSessionService::class, $checkout);
        $this->app->instance(OrderPlacementService::class, $orderPlacement);

        $response = $this->postJson('/api/checkout/session');

        $response->assertStatus(422)
            ->assertJsonStructure(['message']);
    }

    public function test_create_session_returns_201_with_session_payload(): void
    {
        $this->withoutMiddleware();

        $user = User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
        ]);
        assert($user instanceof User);
        $this->actingAs($user, 'user');

        $bagData = [
            'products' => collect([(object) ['bag_id' => 22]]),
        ];

        $session = new CheckoutSession;
        $session->id = '11111111-1111-1111-1111-111111111111';
        $session->expires_at = now()->addHour();
        $session->bag_snapshot = ['items' => [], 'totals' => ['final_cents' => 1000]];

        $bag = Mockery::mock(BagInterface::class);
        $bag->shouldReceive('getBag')->once()->andReturn($bagData);

        $checkout = Mockery::mock(CheckoutSessionService::class);
        $checkout->shouldReceive('createSession')
            ->once()
            ->with($user, $bagData)
            ->andReturn($session);

        $orderPlacement = Mockery::mock(OrderPlacementService::class);

        // No auth binding
        $this->app->instance(BagInterface::class, $bag);
        $this->app->instance(CheckoutSessionService::class, $checkout);
        $this->app->instance(OrderPlacementService::class, $orderPlacement);

        $response = $this->postJson('/api/checkout/session');

        $response->assertCreated()
            ->assertJsonPath('session_id', '11111111-1111-1111-1111-111111111111')
            ->assertJsonStructure(['session_id', 'expires_at', 'bag']);
    }
}
