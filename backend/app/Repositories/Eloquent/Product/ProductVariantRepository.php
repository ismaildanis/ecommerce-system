<?php

namespace App\Repositories\Eloquent\Product;

use App\Models\ProductVariant;
use App\Repositories\Contracts\Product\ProductVariantRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class ProductVariantRepository implements ProductVariantRepositoryInterface
{
    public function __construct(
        private readonly ProductVariant $model
    ) {}

    public function getProductVariants(int $productId)
    {
        return Cache::tags(['products'])->remember("product.{$productId}.variants", 3600, function () use ($productId) {
            return $this->model->where('product_id', $productId)->with('variantImages', 'variantSizes.inventory', 'variantSizes.sizeOption')->get();
        });
    }

    public function getProductVariantById(int $variantId)
    {
        return Cache::tags(['products'])->remember("variant.{$variantId}", 3600, function () use ($variantId) {
            return $this->model->where('id', $variantId)->with('variantImages', 'variantSizes.inventory', 'variantSizes.sizeOption')->first();
        });
    }

    public function getProductVariant(int $productId, int $variantId)
    {
        return Cache::tags(['products'])->remember("product.{$productId}.variant.{$variantId}", 3600, function () use ($productId, $variantId) {
            return $this->model->where('product_id', $productId)->where('id', $variantId)->with('variantImages', 'variantSizes.inventory', 'variantSizes.sizeOption')->first();
        });
    }

    public function getProductVariantBySlug(string $slug)
    {
        return Cache::tags(['products'])->remember("variant.slug.{$slug}", 3600, function () use ($slug) {
            return $this->model->where('slug', $slug)->with('product', 'variantImages', 'variantAttributes.attribute', 'variantAttributes.option')->first();
        });
    }

    public function getPopularAllVariants()
    {
        return Cache::tags(['products'])->remember("variants.popular", 3600, function () {
            return $this->model->with(
                'product',
                'variantImages',
                'variantSizes.inventory',
                'variantSizes.sizeOption',
            )->where('is_popular', true)->get();
        });
    }

    public function createVariant(array $data, int $productId)
    {
        $variant = $this->model->where('product_id', $productId)->create($data);
        Cache::tags(['products'])->flush();
        return $variant;
    }

    public function updateVariant(int $productId, int $id, array $data)
    {
        $variant = $this->model->where('product_id', $productId)->where('id', $id)->first();
        if ($variant) {
            $variant->update($data);
            Cache::tags(['products'])->flush();
        }

        return $variant;
    }

    public function deleteVariant(int $productId, int $id)
    {
        $result = $this->model->where('product_id', $productId)->where('id', $id)->delete();
        Cache::tags(['products'])->flush();
        return $result;
    }
}
