<?php

namespace App\Repositories\Contracts\Payment;

use App\Models\PaymentMethod;
use App\Repositories\Contracts\BaseRepositoryInterface;

interface PaymentMethodRepositoryInterface extends BaseRepositoryInterface
{
    public function getPaymentMethodForUser($userId, $paymentMethodId): ?PaymentMethod;

    public function createPaymentMethod(array $stored);

    public function findByProviderToken($provider, $token);

    public function saveFromGateway($attributes);
}
