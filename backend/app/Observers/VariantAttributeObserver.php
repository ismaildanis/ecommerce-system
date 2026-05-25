<?php

namespace App\Observers;

use App\Jobs\DeleteProductToElasticsearch;
use App\Jobs\IndexProductToElasticsearch;
use App\Models\VariantAttribute;

class VariantAttributeObserver
{
    public function saved(VariantAttribute $variantAttribute): void
    {
        IndexProductToElasticsearch::dispatch($variantAttribute->variant->product_id)->afterCommit();
    }

    /**
     * Handle the VariantAttribute "created" event.
     */
    public function created(VariantAttribute $variantAttribute): void
    {
        //
    }

    /**
     * Handle the VariantAttribute "updated" event.
     */
    public function updated(VariantAttribute $variantAttribute): void
    {
        //
    }

    /**
     * Handle the VariantAttribute "deleted" event.
     */
    public function deleted(VariantAttribute $variantAttribute): void
    {
        IndexProductToElasticsearch::dispatch($variantAttribute->variant->product_id)->afterCommit();
    }

    /**
     * Handle the VariantAttribute "restored" event.
     */
    public function restored(VariantAttribute $variantAttribute): void
    {
        //
    }

    /**
     * Handle the VariantAttribute "force deleted" event.
     */
    public function forceDeleted(VariantAttribute $variantAttribute): void
    {
        //
    }
}
