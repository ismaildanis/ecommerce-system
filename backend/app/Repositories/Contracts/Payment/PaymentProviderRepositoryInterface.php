<?php

namespace App\Repositories\Contracts\Payment;

use App\Models\PaymentProvider;
interface PaymentProviderRepositoryInterface
{
    public function findActiveByCode(string $code): ?PaymentProvider;
}
