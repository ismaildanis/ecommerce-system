<?php

namespace App\Repositories\Contracts\Order;

use App\Models\Order;

interface OrderRepositoryInterface
{
    public function getOrdersBySeller($sellerId);

    public function create(array $attributes): Order;

    public function getOrdersForUser($userId);

    public function getOrderForUser($orderId, $userId);

    public function getOrderDetailforUser($userId, $id);

    public function latest(): ?Order;
}
