<?php

namespace App\Repositories\Contracts\Payment;

use App\Models\Payment;
use App\Repositories\Contracts\BaseRepositoryInterface;

interface PaymentRepositoryInterface extends BaseRepositoryInterface
{
    public function create(array $attributes): Payment;

    public function getPaymentForOrder($orderId): Payment;
}
