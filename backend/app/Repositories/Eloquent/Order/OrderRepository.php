<?php

namespace App\Repositories\Eloquent\Order;

use App\Models\Order;
use App\Repositories\Contracts\Order\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    public function __construct(
        private readonly Order $model
    ) {}

    public function getOrdersBySeller(int $sellerId)
    {
        return $this->model->where('seller_id', $sellerId)->get();
    }

    public function create(array $attributes): Order
    {
        return $this->model->create($attributes);
    }

    public function getOrdersforUser(int $userId)
    {
        return $this->model->where('user_id', $userId)->orderByDesc('id')->get();
    }

    public function getOrderforUser(int $orderId, int $userId)
    {
        return $this->model->where('user_id', $userId)->where('id', $orderId)->first();
    }

    public function getOrderDetailforUser(int $userId, int $id)
    {
        return $this->model->with('orderItems.product.variants.variantImages.variantSizes.sizeOption', 'orderItems.product.variants.variantImages.variants.variantSizes.inventory')
            ->where('user_id', $userId)
            ->where('id', $id)
            ->orderByDesc('id')
            ->get();
    }

    public function latest(): ?Order
    {
        return $this->model->newQuery()
            ->latest('id')
            ->first();
    }
}
