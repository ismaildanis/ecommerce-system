<?php

namespace Tests\Unit\Checkout\Orders;

use App\Jobs\SellerOrderNotification;
use App\Jobs\SendOrderNotification;
use App\Models\CheckoutSession;
use App\Models\Order;
use App\Models\User;
use App\Repositories\Contracts\Bag\BagRepositoryInterface;
use App\Services\Campaigns\CampaignManager;
use App\Services\Checkout\Orders\OrderFactory;
use App\Services\Checkout\Orders\OrderItemFactory;
use App\Services\Checkout\Orders\OrderPlacementService;
use App\Services\Inventory\InventoryService;
use App\Services\Payments\PaymentMethodRecorder;
use App\Services\Payments\PaymentRecorder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;
use Mockery;
use Tests\TestCase;

class OrderPlacementServiceTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_place_from_session_creates_order_updates_stock_records_payment_and_dispatches_notifications(): void
    {
        Bus::fake();

        DB::shouldReceive('transaction')
            ->once()
            ->andReturnUsing(fn ($callback) => $callback());

        $user = new User;
        $user->id = 10;

        $seller = new User;
        $seller->id = 99;

        $order = new Order;
        $order->id = 777;

        $session = Mockery::mock(CheckoutSession::class)->makePartial();
        assert($session instanceof CheckoutSession);

        $session->bag_snapshot = [
            'applied_campaign' => ['id' => 44],
            'totals' => ['discount_cents' => 1200],
        ];
        $session->payment_data = [
            'provider' => 'iyzico',
            'intent' => ['payment_id' => 'pay_1'],
        ];
        $session->shouldReceive('update')
            ->once()
            ->with([
                'status' => 'confirmed',
                'meta->order_id' => 777,
            ]);

        $item = new class($seller)
        {
            public int $variant_size_id = 301;

            public int $quantity = 2;

            public object $product;

            public function __construct($seller)
            {
                $this->product = (object) [
                    'store' => (object) ['seller' => $seller],
                ];
            }
        };

        $items = new Collection([$item]);
        $bag = (object) ['id' => 5];

        $orderFactory = Mockery::mock(OrderFactory::class);
        $orderItemFactory = Mockery::mock(OrderItemFactory::class);
        $inventoryService = Mockery::mock(InventoryService::class);
        $paymentRecorder = Mockery::mock(PaymentRecorder::class);
        $paymentMethodRecorder = Mockery::mock(PaymentMethodRecorder::class);
        $bagRepository = Mockery::mock(BagRepositoryInterface::class);
        $campaign = Mockery::mock(CampaignManager::class);

        $orderFactory->shouldReceive('create')->once()->andReturn($order);
        $orderItemFactory->shouldReceive('createMany')->once()->andReturn($items);
        $inventoryService->shouldReceive('decrementForOrderItems')->once()->with($items);
        $paymentRecorder->shouldReceive('record')->once()->with($order, $session->payment_data);
        $paymentMethodRecorder->shouldReceive('store')->once();

        $campaign->shouldReceive('logUsage')
            ->once()
            ->with(44, 10, 777, 1200);

        $bagRepository->shouldReceive('getBag')->once()->with($user)->andReturn($bag);
        $bagRepository->shouldReceive('clearBagItems')->once()->with($bag);

        $service = new OrderPlacementService(
            $orderFactory,
            $orderItemFactory,
            $inventoryService,
            $paymentRecorder,
            $paymentMethodRecorder,
            $bagRepository,
            $campaign
        );

        $result = $service->placeFromSession($user, $session, ['save_card' => false]);

        $this->assertSame(777, $result->id);

        Bus::assertDispatched(SellerOrderNotification::class);
        Bus::assertDispatched(SendOrderNotification::class);
    }
}
