<?php

namespace Tests\Unit\Checkout\Orders;

use App\Models\CheckoutSession;
use App\Models\Order;
use App\Models\OrderItem;
use App\Repositories\Contracts\OrderItem\OrderItemRepositoryInterface;
use App\Repositories\Contracts\Product\ProductRepositoryInterface;
use App\Services\Checkout\Orders\OrderItemFactory;
use Mockery;
use Tests\TestCase;

class OrderItemFactoryTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_create_many_creates_order_item_and_increments_total_sold(): void
    {
        $order = new Order;
        $order->id = 88;

        $session = new CheckoutSession;
        $session->bag_snapshot = [
            'items' => [
                [
                    'bag_item_id' => 11,
                    'product_id' => 501,
                    'variant_size_id' => 901,
                    'store_id' => 41,
                    'product_title' => 'Sneaker',
                    'product_category_title' => 'Shoes',
                    'size_name' => '42',
                    'color_name' => 'Black',
                    'quantity' => 2,
                    'unit_price_cents' => 3000,
                ],
            ],
            'totals' => [
                'item_final_price_cents' => [11 => 5500],
                'per_item_cargo_price_cents' => [11 => 250],
            ],
            'applied_campaign' => [
                'discount_items' => [
                    ['bag_item_id' => 11, 'discount_cents' => 500],
                ],
            ],
        ];
        $session->payment_data = [
            'intent' => [
                'payment_transaction_id' => [11 => 'trx_11'],
            ],
        ];

        $orderItems = Mockery::mock(OrderItemRepositoryInterface::class);
        $products = Mockery::mock(ProductRepositoryInterface::class);

        $returnedItem = new OrderItem;
        $returnedItem->variant_size_id = 901;
        $returnedItem->quantity = 2;

        $orderItems->shouldReceive('create')
            ->once()
            ->withArgs(function (array $payload) use ($order) {
                return $payload['order_id'] === $order->id
                    && $payload['product_id'] === 501
                    && $payload['variant_size_id'] === 901
                    && $payload['quantity'] === 2
                    && $payload['discount_price_cents'] === 500
                    && $payload['paid_price_cents'] === 5500
                    && $payload['cargo_share_cents'] === 250
                    && $payload['payment_transaction_id'] === 'trx_11'
                    && $payload['status'] === 'confirmed'
                    && $payload['payment_status'] === 'paid';
            })
            ->andReturn($returnedItem);

        $products->shouldReceive('incrementTotalSoldQuantity')
            ->once()
            ->with(501, 2);

        $service = new OrderItemFactory($orderItems, $products);

        $items = $service->createMany($order, $session);

        $this->assertCount(1, $items);
    }
}
