<?php

namespace App\Repositories\Contracts\RefundOrder;

use App\Repositories\Contracts\BaseRepositoryInterface;

interface RefundOrderItemRepositoryInterface extends BaseRepositoryInterface
{
    public function create(array $data);
}
