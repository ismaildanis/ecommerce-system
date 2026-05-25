<?php

namespace App\Http\Controllers\Api\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Requests\Checkout\CreatePaymentIntentRequest;
use App\Http\Requests\Checkout\UpdateShippingRequest;
use App\Http\Resources\Address\AddressResource;
use App\Services\Bag\Contracts\BagInterface;
use App\Services\Checkout\CheckoutSessionService;
use Illuminate\Auth\AuthenticationException;

class CheckoutController extends Controller
{
    public function __construct(
        private readonly BagInterface $bagService,
        private readonly CheckoutSessionService $checkoutSessionService,
    ) {}

    public function createSession()
    {
        $user = auth('user')->user()
            ?? throw new AuthenticationException('Kullanıcı bulunamadı.');

        $bagData = $this->bagService->getBag();

        if (empty($bagData['products'])) {
            return response()->json(['message' => 'Sepet boş'], 422);
        }

        $session = $this->checkoutSessionService->createSession($user, $bagData);

        return response()->json([
            'session_id' => $session->id,
            'expires_at' => $session->expires_at,
            'bag' => $session->bag_snapshot,
        ], 201);
    }

    public function getSession(string $sessionId)
    {
        $user = auth('user')->user()
            ?? throw new AuthenticationException('Kullanıcı bulunamadı.');

        $results = $this->checkoutSessionService->getSession($user, $sessionId);
        $shippingAddress = $results['shippingAddress'] ? new AddressResource($results['shippingAddress']) : null;
        $billingAddress = $results['billingAddress'] ? new AddressResource($results['billingAddress']) : null;

        return response()->json([
            'session_id' => $results['session']->id,
            'order_number' => $results['session']->order_number,
            'expires_at' => $results['session']->expires_at,
            'status' => $results['session']->status,
            'bag' => $results['session']->bag_snapshot,
            'shipping_data' => array_merge(
                (array) $results['session']->shipping_data,
                ['shipping_address' => $shippingAddress]
            ),
            'billing_data' => array_merge(
                (array) $results['session']->billing_data,
                ['billing_address' => $billingAddress]
            ),
            'payment_data' => $results['session']->payment_data,
            'meta' => $results['session']->meta,
        ]);
    }

    public function updateShipping(UpdateShippingRequest $request)
    {
        $user = auth('user')->user()
            ?? throw new AuthenticationException('Kullanıcı bulunamadı.');
        $session = $this->checkoutSessionService->updateShipping($user, $request->validated());

        return response()->json([
            'session_id' => $session->id,
            'status' => $session->status,
            'shipping_data' => $session->shipping_data,
            'billing_data' => $session->billing_data,
            'bag' => $session->bag_snapshot,
        ]);
    }

    public function createPaymentIntent(CreatePaymentIntentRequest $request)
    {
        $user = auth('user')->user()
            ?? throw new AuthenticationException('Kullanıcı bulunamadı.');

        $session = $this->checkoutSessionService->createPaymentIntent($user, $request->validated());

        return response()->json([
            'session_id' => $session->id,
            'status' => $session->status,
            'payment_data' => $session->payment_data,
        ]);
    }
}
