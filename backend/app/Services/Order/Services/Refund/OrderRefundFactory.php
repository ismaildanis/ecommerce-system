<?php

namespace App\Services\Order\Services\Refund;

use App\Models\Order;
use App\Models\OrderRefund;
use App\Repositories\Contracts\RefundOrder\RefundOrderRepositoryInterface;

class OrderRefundFactory
{
    public function __construct(
        private RefundOrderRepositoryInterface $orderRefundRepository
    ) {}

    public function create(array $payload, Order $order): OrderRefund
    {
        return $this->orderRefundRepository->create([
            'order_id' => $order->id,
            'user_id' => $order->user_id,
            'status' => $payload['status'] ?? 'requested',
            'reason' => $payload['reason'],
            'customer_note' => $payload['customer_note'] ?? null,
            'refund_total_cents' => $payload['refund_total_cents'],
        ]);
    }
}
