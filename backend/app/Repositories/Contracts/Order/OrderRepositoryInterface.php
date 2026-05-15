<?php

namespace App\Repositories\Contracts\Order;

use App\Models\Order;
use App\Repositories\Contracts\BaseRepositoryInterface;

interface OrderRepositoryInterface extends BaseRepositoryInterface
{
    public function getOrdersBySeller($sellerId);

    public function create(array $attributes): Order;

    public function getOrdersForUser($userId);

    public function getOrderForUser($orderId, $userId);

    public function getOrderDetailforUser($userId, $id);

    public function latest(): ?Order;
}
