<?php

namespace App\Observers;

use App\Jobs\DeleteProductToElasticsearch;
use App\Jobs\IndexProductToElasticsearch;
use App\Models\ProductVariant;

class ProductVariantObserver
{
    public function saved(ProductVariant $productVariant): void
    {
        IndexProductToElasticsearch::dispatch($productVariant->product_id)->afterCommit();
    }

    /**
     * Handle the ProductVariant "created" event.
     */
    public function created(ProductVariant $productVariant): void
    {
        //
    }

    /**
     * Handle the ProductVariant "updated" event.
     */
    public function updated(ProductVariant $productVariant): void
    {
        //
    }

    /**
     * Handle the ProductVariant "deleted" event.
     */
    public function deleted(ProductVariant $productVariant): void
    {
        IndexProductToElasticsearch::dispatch($productVariant->product_id)->afterCommit();
    }

    /**
     * Handle the ProductVariant "restored" event.
     */
    public function restored(ProductVariant $productVariant): void
    {
        //
    }

    /**
     * Handle the ProductVariant "force deleted" event.
     */
    public function forceDeleted(ProductVariant $productVariant): void
    {
        //
    }
}
