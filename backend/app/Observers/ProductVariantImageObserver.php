<?php

namespace App\Observers;

use App\Jobs\DeleteProductToElasticsearch;
use App\Jobs\IndexProductToElasticsearch;
use App\Models\ProductVariant;
use App\Models\ProductVariantImage;
use Illuminate\Support\Facades\Log;

class ProductVariantImageObserver
{
    public function saved(ProductVariantImage $productVariantImage): void
    {
        try {
            $productVariantImage->load('productVariant.product');

            if ($productVariantImage->productVariant && $productVariantImage->productVariant->product) {
                IndexProductToElasticsearch::dispatch($productVariantImage->productVariant->product->id)->afterCommit();
            }
        } catch (\Exception $e) {
            Log::error('ProductVariantImageObserver error: '.$e->getMessage());
        }
    }

    /**
     * Handle the ProductVariantImage "created" event.
     */
    public function created(ProductVariantImage $productVariantImage): void
    {
        //
    }

    /**
     * Handle the ProductVariantImage "updated" event.
     */
    public function updated(ProductVariantImage $productVariantImage): void
    {
        //
    }

    /**
     * Handle the ProductVariantImage "deleted" event.
     */
    public function deleted(ProductVariantImage $productVariantImage): void
    {
        $productId = optional($productVariantImage->variant)->product_id
            ?? ProductVariant::whereKey($productVariantImage->product_variant_id)->value('product_id');

        if ($productId) {
            IndexProductToElasticsearch::dispatch($productId)->afterCommit();
        }
    }

    /**
     * Handle the ProductVariantImage "restored" event.
     */
    public function restored(ProductVariantImage $productVariantImage): void
    {
        //
    }

    /**
     * Handle the ProductVariantImage "force deleted" event.
     */
    public function forceDeleted(ProductVariantImage $productVariantImage): void
    {
        //
    }
}
