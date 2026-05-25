<?php

namespace App\Repositories\Contracts\Order;

use App\Models\Order;

interface OrderRepositoryInterface
{
    public function getOrdersBySeller(int $sellerId);

    public function create(array $attributes): Order;

    public function getOrdersForUser(int $userId);

    public function getOrderForUser(int $orderId, int $userId);

    public function getOrderDetailforUser(int $userId, int $id);

    public function latest(): ?Order;
}
