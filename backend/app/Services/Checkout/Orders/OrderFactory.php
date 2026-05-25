<?php

namespace App\Services\Checkout\Orders;

use App\Models\CheckoutSession;
use App\Models\Order;
use App\Models\User;
use App\Repositories\Contracts\Order\OrderRepositoryInterface;

class OrderFactory
{
    public function __construct(
        private readonly OrderRepositoryInterface $orders,
    ) {}

    public function create(User $user, CheckoutSession $session): Order
    {
        $totals = $session->bag_snapshot['totals'] ?? [];
        $shipping = $session->shipping_data ?? [];
        $billing = $session->billing_data ?? [];
        $appliedCampaign = $session->bag_snapshot['applied_campaign'] ?? null;

        return $this->orders->create([
            'user_id' => $user->id,
            'bag_id' => $session->bag_id,
            'checkout_session_id' => $session->id,
            'user_shipping_address_id' => $shipping['shipping_address_id'] ?? null,
            'user_billing_address_id' => $billing['billing_address_id'] ?? null,
            'campaign_id' => $appliedCampaign['id'] ?? null,
            'campaign_info' => $appliedCampaign['name'] ?? null,
            'order_number' => str_pad((string) $session->order_number, 8, '0', STR_PAD_LEFT),
            'subtotal_cents' => $totals['total_cents'] ?? 0,
            'discount_cents' => $totals['discount_cents'] ?? 0,
            'cargo_price_cents' => $totals['cargo_cents'] ?? 0,
            'grand_total_cents' => $totals['final_cents'] ?? 0,
            'currency' => 'TRY',
            'status' => 'confirmed',
        ]);
    }
}
