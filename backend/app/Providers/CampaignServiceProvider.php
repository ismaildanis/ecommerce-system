<?php

namespace App\Providers;

use App\Services\Campaigns\CampaignManager;
use App\Services\Campaigns\CampaignRegistry;
use Illuminate\Support\ServiceProvider;

class CampaignServiceProvider extends ServiceProvider
{
    public function register()
    {
        /*$this->app->singleton(CampaignRegistry::class, function ($app) {
            return new CampaignRegistry();
        });

        $this->app->bind(CampaignManager::class, function ($app) {
            return new CampaignManager($app->make(CampaignRegistry::class));
        });
        */
    }
}
