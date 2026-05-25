<?php

namespace Tests\Unit\Checkout\Orders;

use App\Models\CheckoutSession;
use App\Models\Order;
use App\Models\User;
use App\Repositories\Contracts\Order\OrderRepositoryInterface;
use App\Services\Checkout\Orders\OrderFactory;
use Mockery;
use Tests\TestCase;

class OrderFactoryTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_create_builds_order_payload_with_next_order_number(): void
    {
        $user = new User;
        $user->id = 10;

        $session = new CheckoutSession;
        $session->bag_id = 55;
        $session->order_number = 10;
        $session->shipping_data = ['shipping_address_id' => 1001];
        $session->billing_data = ['billing_address_id' => 1002];
        $session->bag_snapshot = [
            'totals' => [
                'total_cents' => 10000,
                'discount_cents' => 1500,
                'cargo_cents' => 500,
                'final_cents' => 9000,
            ],
            'applied_campaign' => [
                'id' => 77,
                'name' => 'SPRING',
            ],
        ];

        $orders = Mockery::mock(OrderRepositoryInterface::class);

        $expectedOrder = new Order;
        $expectedOrder->id = 1;
        $expectedOrder->order_number = '00000010';

        $orders->shouldReceive('create')
            ->once()
            ->withArgs(function (array $payload) use ($user, $session) {
                return $payload['user_id'] === $user->id
                    && $payload['bag_id'] === $session->bag_id
                    && $payload['order_number'] === '00000010'
                    && $payload['subtotal_cents'] === 10000
                    && $payload['discount_cents'] === 1500
                    && $payload['cargo_price_cents'] === 500
                    && $payload['grand_total_cents'] === 9000
                    && $payload['status'] === 'confirmed';
            })
            ->andReturn($expectedOrder);

        $service = new OrderFactory($orders);

        $order = $service->create($user, $session);

        $this->assertSame('00000010', $order->order_number);
    }
}
