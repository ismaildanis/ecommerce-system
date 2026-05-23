<?php

namespace App\Services\Checkout\Orders;

use App\Jobs\SellerOrderNotification;
use App\Jobs\SendOrderNotification;
use App\Models\CheckoutSession;
use App\Models\Order;
use App\Models\User;
use App\Repositories\Contracts\Bag\BagRepositoryInterface;
use App\Services\Campaigns\CampaignManager;
use App\Services\Inventory\InventoryService;
use App\Services\Payments\PaymentMethodRecorder;
use App\Services\Payments\PaymentRecorder;
use Illuminate\Support\Facades\DB;

class OrderPlacementService
{
    public function __construct(
        private readonly OrderFactory $orderFactory,
        private readonly OrderItemFactory $orderItemFactory,
        private readonly InventoryService $inventoryService,
        private readonly PaymentRecorder $paymentRecorder,
        private readonly PaymentMethodRecorder $paymentMethodRecorder,
        private readonly BagRepositoryInterface $bagRepository,
        private readonly CampaignManager $campaign
    ) {}

    public function placeFromSession(User $user, CheckoutSession $session, array $data): Order
    {
        return DB::transaction(function () use ($user, $session, $data) {
            $session = CheckoutSession::whereKey($session->id)
                ->lockForUpdate()
                ->firstOrFail();

            if ($orderId = data_get($session->meta, 'order_id')) {
                return Order::findOrFail($orderId);
            }

            $order = $this->orderFactory->create($user, $session);
            $items = $this->orderItemFactory->createMany($order, $session);

            $this->inventoryService->decrementForOrderItems($items);
            $this->paymentRecorder->record($order, $session->payment_data);
            $this->paymentMethodRecorder->store($user, $session->payment_data, $data);

            $bagPayload = $session->bag_snapshot;
            $campaignId = data_get($bagPayload, 'applied_campaign.id');
            $discountCents = (int) data_get($bagPayload, 'totals.discount_cents', 0);

            if ($campaignId) {
                $this->campaign->logUsage(
                    $campaignId,
                    $user->id,
                    $order->id,
                    $discountCents
                );
            }

            $bag = $this->bagRepository->getBag($user);
            $this->bagRepository->clearBagItems($bag);

            $meta = $session->meta ?? [];
            $meta['order_id'] = $order->id;

            $session->forceFill([
                'status' => 'confirmed',
                'meta' => $meta,
            ])->save();

            foreach ($items as $item) {
                $seller = $item->product->store->seller;

                SellerOrderNotification::dispatch($order, $seller)
                    ->afterCommit()
                    ->onQueue('notifications');
            }

            SendOrderNotification::dispatch($order, $user)
                ->afterCommit()
                ->onQueue('notifications');

            return $order;
        });
    }
}