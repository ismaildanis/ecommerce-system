<?php

namespace App\Http\Controllers\Api\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Requests\Checkout\ConfirmOrderRequest;
use App\Http\Requests\Checkout\CreatePaymentIntentRequest;
use App\Http\Requests\Checkout\UpdateShippingRequest;
use App\Jobs\OrderPlacementJob;
use App\Models\User;
use App\Services\Bag\Contracts\BagInterface;
use App\Services\Checkout\CheckoutSessionService;
use App\Traits\GetUser;
use App\Repositories\Contracts\AuthenticationRepositoryInterface;

class CheckoutController extends Controller
{
    use GetUser;

    public function __construct(
        private readonly BagInterface $bagService,
        private readonly CheckoutSessionService $checkoutSessionService,
        private readonly AuthenticationRepositoryInterface $authenticationRepository
    ) {}

    public function createSession()
    {
        $user = $this->getUser();

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

    public function getSession($sessionId)
    {
        $user = $this->getUser();

        $session = $this->checkoutSessionService->getSession($user, $sessionId);

        return response()->json([
            'session_id' => $session->id,
            'expires_at' => $session->expires_at,
            'status' => $session->status,
            'bag' => $session->bag_snapshot,
            'shipping_data' => $session->shipping_data,
            'billing_data' => $session->billing_data,
            'payment_data' => $session->payment_data,
            'meta' => $session->meta,
        ]);

    }

    public function updateShipping(UpdateShippingRequest $request)
    {
        $user = $this->getUser();
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
        $user = $this->getUser();

        $session = $this->checkoutSessionService->createPaymentIntent($user, $request->validated());

        return response()->json([
            'session_id' => $session->id,
            'status' => $session->status,
            'payment_data' => $session->payment_data,
        ]);
    }

    /** @unauthenticated */
    public function confirmOrder(ConfirmOrderRequest $request)
    {

        $session = $this->checkoutSessionService->confirmPaymentIntent($request->validated());

        if ($session->status !== 'confirmed') {
            return response()->json([
                'status' => 'error',
                'message' => 'Ödeme doğrulanamadı veya 3D işlemi başarısız.',
            ], 422);
        }
        $user = $session->user ?: User::find($session->user_id);
        OrderPlacementJob::dispatch($user, $session, $request->validated())->onQueue('orders');

        return response()->json([
            'session' => $session,
            'status' => 'success',
        ]);
    }
}
