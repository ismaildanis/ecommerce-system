<?php

namespace App\Repositories\Contracts\Payment;

use App\Models\PaymentMethod;

interface PaymentMethodRepositoryInterface
{
    public function getPaymentMethodForUser(int $userId, int $paymentMethodId): ?PaymentMethod;

    public function createPaymentMethod(array $stored);

    public function findByProviderToken(string $provider, string $token);

    public function saveFromGateway(PaymentMethod $method);
}
