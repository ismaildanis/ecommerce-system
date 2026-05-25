<?php

namespace App\Repositories\Eloquent\Store;

use App\Models\Store;
use App\Repositories\Contracts\Store\StoreRepositoryInterface;

class StoreRepository implements StoreRepositoryInterface
{
    protected $model;

    public function __construct(Store $model)
    {
        $this->model = $model;
    }

    public function getStoreBySellerId($sellerId)
    {
        return $this->model->where('seller_id', $sellerId)->first();
    }

    public function getStoreWithSeller($sellerId)
    {
        return $this->model->with(['seller'])->where('seller_id', $sellerId)->first();
    }
}
