<?php

namespace App\Repositories\Contracts\OrderItem;

use App\Models\OrderItem;
use Illuminate\Support\Collection;

interface OrderItemRepositoryInterface
{
    public function getOrderItemsBySeller(int $storeId);

    public function getOrderItemBySeller(int $storeId, int $id);

    public function getOrderItemById(int $storeId, int $id);

    public function getOrderDetailforUser(int $userId, int $orderId);

    public function create(array $attributes): OrderItem;

    public function createMany(array $items): Collection;
}
