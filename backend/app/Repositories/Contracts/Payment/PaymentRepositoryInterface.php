<?php

namespace App\Repositories\Contracts\Payment;

use App\Models\Payment;

interface PaymentRepositoryInterface
{
    public function create(array $attributes): Payment;

    public function getPaymentForOrder($orderId): Payment;
}
