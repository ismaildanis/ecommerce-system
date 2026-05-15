<?php

namespace App\Providers;

use App\Channels\SmsChannel;
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
use App\Repositories\Contracts\Attribute\AttributeRepositoryInterface;
use App\Repositories\Contracts\AttributeOptions\AttributeOptionsRepositoryInterface;
use App\Repositories\Contracts\AuthenticationRepositoryInterface;
use App\Repositories\Contracts\Bag\BagRepositoryInterface;
use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\Contracts\Campaign\CampaignRepositoryInterface;
use App\Repositories\Contracts\Category\CategoryRepositoryInterface;
use App\Repositories\Contracts\CreditCard\CreditCardRepositoryInterface;
use App\Repositories\Contracts\Image\ProductVariantImageRepositoryInterface;
use App\Repositories\Contracts\Inventory\InventoryRepositoryInterface;
use App\Repositories\Contracts\Order\OrderRepositoryInterface;
use App\Repositories\Contracts\OrderItem\OrderItemRepositoryInterface;
use App\Repositories\Contracts\Product\ProductRepositoryInterface;
use App\Repositories\Contracts\Product\ProductVariantRepositoryInterface;
use App\Repositories\Contracts\RefundOrder\RefundOrderItemRepositoryInterface;
use App\Repositories\Contracts\RefundOrder\RefundOrderRepositoryInterface;
use App\Repositories\Contracts\Store\StoreRepositoryInterface;
use App\Repositories\Contracts\User\AddressesRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquent\Attribute\AttributeRepository;
use App\Repositories\Eloquent\AttributeOptions\AttributeOptionsRepository;
use App\Repositories\Eloquent\AuthenticationRepository;
use App\Repositories\Eloquent\Bag\BagRepository;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\Campaign\CampaignRepository;
use App\Repositories\Eloquent\Category\CategoryRepository;
use App\Repositories\Eloquent\CreditCard\CreditCardRepository;
use App\Repositories\Eloquent\Image\ProductVariantImageRepository;
use App\Repositories\Eloquent\Inventory\InventoryRepository;
use App\Repositories\Eloquent\Order\OrderRepository;
use App\Repositories\Eloquent\OrderItem\OrderItemRepository;
use App\Repositories\Eloquent\Product\ProductRepository;
use App\Repositories\Eloquent\Product\ProductVariantRepository;
use App\Repositories\Eloquent\RefundOrder\RefundOrderItemRepository;
use App\Repositories\Eloquent\RefundOrder\RefundOrderRepository;
use App\Repositories\Eloquent\Store\StoreRepository;
use App\Repositories\Eloquent\User\AddressesRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Services\SmsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Authentication Repository
        $this->app->bind(
            AuthenticationRepositoryInterface::class,
            AuthenticationRepository::class
        );

        // Base Repository
        $this->app->bind(
            BaseRepositoryInterface::class,
            BaseRepository::class
        );

        // Bag Repository
        $this->app->bind(
            BagRepositoryInterface::class,
            BagRepository::class
        );

        // Product Repository
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );

        // Product Variant Repository
        $this->app->bind(
            ProductVariantRepositoryInterface::class,
            ProductVariantRepository::class
        );

        // Category Repository
        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );

        // Attribute Repository
        $this->app->bind(
            AttributeRepositoryInterface::class,
            AttributeRepository::class
        );

        // Attribute Options Repository
        $this->app->bind(
            AttributeOptionsRepositoryInterface::class,
            AttributeOptionsRepository::class
        );

        // Product Variant Image Repository
        $this->app->bind(
            ProductVariantImageRepositoryInterface::class,
            ProductVariantImageRepository::class
        );

        $this->app->bind(
            InventoryRepositoryInterface::class,
            InventoryRepository::class
        );

        // Store Repository
        $this->app->bind(
            StoreRepositoryInterface::class,
            StoreRepository::class
        );

        // Order Repository
        $this->app->bind(
            OrderRepositoryInterface::class,
            OrderRepository::class
        );

        // Order Item Repository
        $this->app->bind(
            OrderItemRepositoryInterface::class,
            OrderItemRepository::class
        );

        // Order Refund Repository
        $this->app->bind(
            RefundOrderRepositoryInterface::class,
            RefundOrderRepository::class
        );

        // Order Refund Item Repository
        $this->app->bind(
            RefundOrderItemRepositoryInterface::class,
            RefundOrderItemRepository::class
        );

        // Campaign Repository
        $this->app->bind(
            CampaignRepositoryInterface::class,
            CampaignRepository::class
        );

        // Credit Card Repository
        $this->app->bind(
            CreditCardRepositoryInterface::class,
            CreditCardRepository::class
        );

        // User Repository
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        // Addresses Repository
        $this->app->bind(
            AddressesRepositoryInterface::class,
            AddressesRepository::class
        );

        // Campaign Registry
        $this->app->register(CampaignServiceProvider::class);

        $this->app->singleton(SmsService::class);

        // SMS channel'ı kaydet
        $this->app->make('Illuminate\Notifications\ChannelManager')
            ->extend('sms', function ($app) {
                return new SmsChannel($app->make(SmsService::class));
            });

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
