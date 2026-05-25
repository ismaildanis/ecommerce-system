<?php

namespace App\Providers;

use App\Services\Order\Contracts\OrderInterface;
use App\Services\Order\Services\OrderService;
use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(OrderInterface::class, OrderService::class);
    }

    public function boot()
    {
        //
    }
}
