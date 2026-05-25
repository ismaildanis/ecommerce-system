<?php

namespace App\Repositories\Eloquent\Payment;

use App\Models\PaymentMethod;
use App\Repositories\Contracts\Payment\PaymentMethodRepositoryInterface;

class PaymentMethodRepository implements PaymentMethodRepositoryInterface
{
    public function __construct(
        private readonly PaymentMethod $model
    ) {}

    public function getPaymentMethodForUser(int $userId, int $paymentMethodId): ?PaymentMethod
    {
        return $this->model
            ->where('id', $paymentMethodId)
            ->where('user_id', $userId)
            ->where('is_active', true)
            ->first();
    }

    public function createPaymentMethod(array $stored)
    {
        return $this->model->create($stored);
    }

    public function findByProviderToken(string $provider, string $token)
    {
        return $this->model
            ->where('provider', $provider)
            ->where('provider_payment_method_id', $token)
            ->first();
    }

    public function saveFromGateway(PaymentMethod $method)
    {
        if ($method instanceof PaymentMethod) {
            return $method;
        }

        return tap(
            $this->model->updateOrCreate(
                [
                    'provider' => $method['provider'],
                    'provider_payment_method_id' => $method['provider_payment_method_id'],
                ],
                $method
            )
        );
    }
}
