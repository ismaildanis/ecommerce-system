<?php

namespace App\Repositories\Eloquent\OrderItem;

use App\Models\OrderItem;
use App\Repositories\Contracts\OrderItem\OrderItemRepositoryInterface;
use Illuminate\Support\Collection;

class OrderItemRepository implements OrderItemRepositoryInterface
{
    public function __construct(
        private readonly OrderItem $model
    ) {}

    public function getOrderItemsBySeller(int $storeId)
    {
        return $this->model->with([
            'product',
            'product.variants.variantImages',
            'product.variants.variantSizes.sizeOption',
        ])->where('store_id', $storeId)->orderBy('created_at', 'desc')->get();
    }

    public function getOrderItemBySeller(int $storeId, int $id)
    {
        return $this->model->with([
            'product',
            'product.variants.variantImages',
            'product.variants.variantSizes.sizeOption',
        ])->where('store_id', $storeId)->where('id', $id)->first();
    }

    public function getOrderItemById(int $storeId, int $id)
    {
        return $this->model->with([
            'product',
            'product.variants.variantImages',
            'product.variants.variantSizes.sizeOption',
        ])->where('store_id', $storeId)->where('id', $id)->first();
    }

    public function getOrderDetailforUser(int $userId, int $orderId)
    {
        return $this->model
            ->with([
                'order',
                'product',
                'product.variants.variantImages',
                'product.variants.variantSizes.sizeOption',
            ])
            ->where('order_id', $orderId)
            ->whereHas('order', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->get();
    }

    public function create(array $attributes): OrderItem
    {
        return $this->model->newQuery()->create($attributes);
    }

    public function createMany(array $items): Collection
    {
        $created = collect();

        foreach ($items as $item) {
            $created->push($this->create($item));
        }

        return $created;
    }
}
