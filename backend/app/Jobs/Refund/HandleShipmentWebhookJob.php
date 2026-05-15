<?php

namespace App\Jobs\Refund;

use App\Services\Order\Services\Refund\OrderRefundService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;

class HandleShipmentWebhookJob implements ShouldQueue
{
    use Dispatchable, Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        private readonly array $payload
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(OrderRefundService $refundService): void
    {
        $refundService->handleShipmentWebhook($this->payload);
    }
}
