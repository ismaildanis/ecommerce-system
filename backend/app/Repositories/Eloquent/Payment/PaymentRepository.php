<?php

namespace App\Repositories\Eloquent\Payment;

use App\Models\Payment;
use App\Repositories\Contracts\Payment\PaymentRepositoryInterface;

class PaymentRepository implements PaymentRepositoryInterface
{
    public function __construct(
        private readonly Payment $model
    ) {}

    public function create(array $attributes): Payment
    {
        return $this->model->newQuery()->create($attributes);
    }

    public function getPaymentForOrder(int $orderId): Payment
    {
        return $this->model->newQuery()->where('order_id', $orderId)->first();
    }
}
