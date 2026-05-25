<?php

namespace App\Repositories\Eloquent\Payment;

use App\Models\PaymentProvider;
use App\Repositories\Contracts\Payment\PaymentProviderRepositoryInterface;

class PaymentProviderRepository implements PaymentProviderRepositoryInterface
{
    public function __construct(
        private readonly PaymentProvider $model
    ) {}

    public function findActiveByCode(string $code): ?PaymentProvider
    {
        return $this->model->where('code', $code)->where('is_active', true)->first();
    }
}
