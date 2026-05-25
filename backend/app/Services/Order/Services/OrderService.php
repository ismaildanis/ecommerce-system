<?php

namespace App\Services\Order\Services;

use App\Repositories\Contracts\Order\OrderRepositoryInterface;
use App\Repositories\Contracts\OrderItem\OrderItemRepositoryInterface;
use App\Services\Order\Contracts\OrderInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OrderService implements OrderInterface
{
    public function __construct(
        private readonly OrderRepositoryInterface $orderRepository,
        private readonly OrderItemRepositoryInterface $orderItemRepository,
    ) {}

    public function getOrdersforUser()
    {
        $user = auth('user')->user();
        $orders = $this->orderRepository->getOrdersforUser($user->id);
        if (! $orders) {
            throw new \Exception('Sipariş bulunamadı.');
        }

        return $orders;
    }

    public function getOneOrderforUser(int $orderId)
    {
        $user = auth('user')->user();
        $orders = $this->orderItemRepository->getOrderDetailforUser($user->id, $orderId);
        if (! $orders || $orders->isEmpty()) {
            throw new ModelNotFoundException('Sipariş bulunamadı.');
        }

        return $orders;
    }
}
