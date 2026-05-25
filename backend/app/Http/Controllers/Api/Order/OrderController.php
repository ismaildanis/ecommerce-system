<?php

namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Http\Resources\Address\AddressResource;
use App\Http\Resources\Order\OrderItemResource;
use App\Services\Order\Contracts\OrderInterface;
use Illuminate\Support\Facades\Response;

class OrderController extends Controller
{
    public function __construct(
        private readonly OrderInterface $orderService,
    ) {}

    public function index()
    {
        $orders = $this->orderService->getOrdersforUser();

        return response()->json($orders);
    }

    public function show(int $orderId)
    {
        $orderItems = $this->orderService->getOneOrderforUser($orderId);
        $order = $orderItems->first()->order;
        $userShippingAddress = $order->shippingAddress;
        $userBillingAddress = $order->billingAddress;

        return Response::json([
            'order' => OrderItemResource::collection($orderItems),
            'userShippingAddress' => AddressResource::make($userShippingAddress),
            'userBillingAddress' => AddressResource::make($userBillingAddress),
        ]);
    }
}
