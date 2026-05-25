<?php

namespace App\Providers;

use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantImage;
use App\Models\VariantAttribute;
use App\Observers\InventoryObserver;
use App\Observers\ProductObserver;
use App\Observers\ProductVariantImageObserver;
use App\Observers\ProductVariantObserver;
use App\Observers\VariantAttributeObserver;
use App\Repositories\Contracts\Bag\BagRepositoryInterface;
use App\Repositories\Contracts\Campaign\CampaignRepositoryInterface;
use App\Repositories\Contracts\Category\CategoryRepositoryInterface;
use App\Repositories\Contracts\Image\ProductVariantImageRepositoryInterface;
use App\Repositories\Contracts\Inventory\InventoryRepositoryInterface;
use App\Repositories\Contracts\Order\OrderRepositoryInterface;
use App\Repositories\Contracts\OrderItem\OrderItemRepositoryInterface;
use App\Repositories\Contracts\Product\ProductRepositoryInterface;
use App\Repositories\Contracts\Product\ProductVariantRepositoryInterface;
use App\Repositories\Contracts\Store\StoreRepositoryInterface;
use App\Repositories\Contracts\User\AddressesRepositoryInterface;
use App\Repositories\Contracts\User\UserRepositoryInterface;
use App\Repositories\Eloquent\Bag\BagRepository;
use App\Repositories\Eloquent\Campaign\CampaignRepository;
use App\Repositories\Eloquent\Category\CategoryRepository;
use App\Repositories\Eloquent\Image\ProductVariantImageRepository;
use App\Repositories\Eloquent\Inventory\InventoryRepository;
use App\Repositories\Eloquent\Order\OrderRepository;
use App\Repositories\Eloquent\OrderItem\OrderItemRepository;
use App\Repositories\Eloquent\Product\ProductRepository;
use App\Repositories\Eloquent\Product\ProductVariantRepository;
use App\Repositories\Eloquent\Store\StoreRepository;
use App\Repositories\Eloquent\User\AddressesRepository;
use App\Repositories\Eloquent\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            BagRepositoryInterface::class,
            BagRepository::class
        );

        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );

        $this->app->bind(
            ProductVariantRepositoryInterface::class,
            ProductVariantRepository::class
        );

        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );

        $this->app->bind(
            ProductVariantImageRepositoryInterface::class,
            ProductVariantImageRepository::class
        );

        $this->app->bind(
            InventoryRepositoryInterface::class,
            InventoryRepository::class
        );

        $this->app->bind(
            StoreRepositoryInterface::class,
            StoreRepository::class
        );

        $this->app->bind(
            OrderRepositoryInterface::class,
            OrderRepository::class
        );

        $this->app->bind(
            OrderItemRepositoryInterface::class,
            OrderItemRepository::class
        );

        $this->app->bind(
            CampaignRepositoryInterface::class,
            CampaignRepository::class
        );

        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->bind(
            AddressesRepositoryInterface::class,
            AddressesRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Product::observe(ProductObserver::class);
        ProductVariant::observe(ProductVariantObserver::class);
        ProductVariantImage::observe(ProductVariantImageObserver::class);
        VariantAttribute::observe(VariantAttributeObserver::class);
        Inventory::observe(InventoryObserver::class);
    }
}
