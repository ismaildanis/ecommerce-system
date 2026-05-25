<?php

namespace App\Repositories\Eloquent\Payment;

use App\Models\PaymentProvider;
use App\Repositories\Contracts\Payment\PaymentProviderRepositoryInterface;

class PaymentProviderRepository implements PaymentProviderRepositoryInterface
{
    protected $model;

    public function __construct(PaymentProvider $model)
    {
        $this->model = $model;
    }

    public function findActiveByCode(string $code): ?PaymentProvider
    {
        return $this->model->where('code', $code)->where('is_active', true)->first();
    }
}
