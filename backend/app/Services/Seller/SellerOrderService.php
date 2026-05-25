<?php

namespace App\Services\Seller;

use App\Jobs\RefundOrderItemNotification;
use App\Jobs\SellerRefundJob;
use App\Jobs\ShippedOrderItemNotification;
use App\Models\Payment;
use App\Models\PaymentProvider;
use App\Models\Seller;
use App\Repositories\Contracts\OrderItem\OrderItemRepositoryInterface;
use App\Repositories\Contracts\Store\StoreRepositoryInterface;
use App\Services\Payments\Contracts\PaymentGatewayInterface;
use Illuminate\Auth\AuthenticationException;

class SellerOrderService
{
    public function __construct(
        private readonly OrderItemRepositoryInterface $orderItemRepository,
        private readonly StoreRepositoryInterface $storeRepository,
    ) {}

    public function getSellerOrders()
    {
        $seller = $this->getSeller();

        $store = $this->storeRepository->getStoreBySellerId($seller->id);
        if (! $store) {
            throw new \RuntimeException('Mağaza bulunamadı');
        }

        return $this->orderItemRepository->getOrderItemsBySeller($store->id);
    }

    public function getSellerOneOrder($id)
    {
        $seller = $this->getSeller();

        $store = $this->storeRepository->getStoreBySellerId($seller->id);
        if (! $store) {
            throw new \RuntimeException('Mağaza bulunamadı');
        }

        return $this->orderItemRepository->getOrderItemBySeller($store->id, $id);
    }

    public function confirmItem($id)
    {
        $seller = $this->getSeller();

        $store = $this->storeRepository->getStoreBySellerId($seller->id);
        if (! $store) {
            throw new \RuntimeException('Mağaza bulunamadı');
        }

        $orderItem = $this->orderItemRepository->getOrderItemById($store->id, $id);
        if (! $orderItem) {
            throw new \RuntimeException('Sipariş bulunamadı');
        }
        if ($orderItem->status === 'refunded') {
            throw new \RuntimeException('Bu sipariş zaten iade edilmiş');
        }
        if ($orderItem->shippingItem) {
            throw new \RuntimeException('Bu ürün için zaten kargo oluşturulmuş.');
        }

        $order = $orderItem->order;
        $user = $order->user;

        $orderItem->status = 'shipped';
        $orderItem->save();

        ShippedOrderItemNotification::dispatch($orderItem, $user)->onQueue('notifications');

        return $orderItem;
    }

    public function refundSelectedItems($id, array $payload)
    {
        $seller = $this->getSeller();

        $store = $this->storeRepository->getStoreBySellerId($seller->id);
        if (! $store) {
            throw new \RuntimeException('Mağaza bulunamadı');
        }

        $orderItem = $this->orderItemRepository->getOrderItemById($store->id, $id);
        if (! $orderItem) {
            throw new \RuntimeException('Sipariş bulunamadı');
        }

        $blockedStatuses = ['refunded', 'canceled'];
        $allowedStatuses = ['confirmed', 'partial_refunded'];

        if (
            in_array($orderItem->status, $blockedStatuses, true)
            || ! in_array($orderItem->status, $allowedStatuses, true)
        ) {
            throw new \RuntimeException('Bu ürün iade edilemez veya iade edilmiş.');
        }

        return $this->processRefund($orderItem, $payload);
    }

    private function processRefund($orderItem, array $payload)
    {
        $order = $orderItem->order;
        $payment = Payment::where('order_id', $order->id)->firstOrFail();
        $provider = PaymentProvider::where('code', $payment->provider)->firstOrFail();
        $refundAmount = $this->calculateRefundPrice($orderItem, $payload);

        $gateway = app(PaymentGatewayInterface::class, ['provider' => $provider]);

        $gatewayResponse = $gateway->refundPayment(
            $orderItem->payment_transaction_id,
            $refundAmount,
            $payload
        );

        $newRefundedQuantity = ($orderItem->refunded_quantity ?? 0) + (int) $payload['quantity'];
        $newRefundedPrice = ($orderItem->refunded_price_cents ?? 0) + $refundAmount;

        $orderItem->update([
            'refunded_quantity' => $newRefundedQuantity,
            'refunded_price_cents' => $newRefundedPrice,
            'status' => $newRefundedQuantity >= $orderItem->quantity ? 'refunded' : 'partial_refunded',
            'payment_status' => $newRefundedQuantity >= $orderItem->quantity ? 'refunded' : 'partial_refunded',
            'refunded_at' => now(),
        ]);

        SellerRefundJob::dispatch($orderItem, $payload, $refundAmount)->onQueue('orders');
        RefundOrderItemNotification::dispatch($orderItem, $orderItem->order->user, $payload, $refundAmount)->onQueue('notifications');

        return $gatewayResponse;
    }

    private function calculateRefundPrice($orderItem, $payload)
    {
        $perItemPrice = $orderItem->paid_price_cents / $orderItem->quantity;
        $remainingCents = max(0, $orderItem->paid_price_cents - $orderItem->refunded_price_cents);
        $availableQuantity = $orderItem->quantity - ($orderItem->refunded_quantity ?? 0);
        $refundPrice = round($perItemPrice * $payload['quantity']);

        if ($availableQuantity == 1) {
            $refundPrice = $remainingCents;
        }

        return $refundPrice;
    }

    private function getSeller(): Seller
    {
        return auth('seller')->user() ?? throw new AuthenticationException('Satıcı bulunamadı.');
    }
}
