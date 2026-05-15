<?php

namespace App\Providers;

use App\Services\Shipping\Contracts\ShippingServiceInterface;
use App\Services\Shipping\Services\MNGService;
use Illuminate\Support\ServiceProvider;

class ShippingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ShippingServiceInterface::class, function ($app) {
            return new MNGService;
        });
    }
}
