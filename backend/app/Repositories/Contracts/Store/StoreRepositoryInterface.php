<?php

namespace App\Repositories\Contracts\Store;

interface StoreRepositoryInterface
{
    public function getStoreBySellerId(int $sellerId);

    public function getStoreWithSeller(int $sellerId);
}
