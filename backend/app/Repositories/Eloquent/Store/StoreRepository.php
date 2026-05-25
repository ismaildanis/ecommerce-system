<?php

namespace App\Repositories\Eloquent\Store;

use App\Models\Store;
use App\Repositories\Contracts\Store\StoreRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class StoreRepository implements StoreRepositoryInterface
{
    public function __construct(
        private readonly Store $model
    ) {}

    public function getStoreBySellerId(int $sellerId)
    {
        return Cache::tags(["store_{$sellerId}"])->remember("store.seller.{$sellerId}", 3600, function () use ($sellerId) {
            return $this->model->where('seller_id', $sellerId)->first();
        });
    }

    public function getStoreWithSeller(int $sellerId)
    {
        return Cache::tags(["store_{$sellerId}"])->remember("store.seller.with_seller.{$sellerId}", 3600, function () use ($sellerId) {
            return $this->model->with(['seller'])->where('seller_id', $sellerId)->first();
        });
    }
}
