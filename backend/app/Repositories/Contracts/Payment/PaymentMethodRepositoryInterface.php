<?php

namespace App\Repositories\Contracts\Payment;

use App\Models\PaymentMethod;

interface PaymentMethodRepositoryInterface
{
    public function getPaymentMethodForUser($userId, $paymentMethodId): ?PaymentMethod;

    public function createPaymentMethod(array $stored);

    public function findByProviderToken($provider, $token);

    public function saveFromGateway($attributes);
}
