<?php

namespace App\Repositories\Contracts\Store;

interface StoreRepositoryInterface
{
    public function getStoreBySellerId($sellerId);

    public function getStoreWithSeller($sellerId);
}
