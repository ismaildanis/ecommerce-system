<?php

namespace App\Repositories\Eloquent\Product;

use App\Models\ProductVariant;
use App\Repositories\Contracts\Product\ProductVariantRepositoryInterface;
class ProductVariantRepository implements ProductVariantRepositoryInterface
{
    protected $model;

    public function __construct(ProductVariant $model)
    {
        $this->model = $model;
    }

    public function getProductVariants($productId)
    {
        return $this->model->where('product_id', $productId)->with('variantImages', 'variantSizes.inventory', 'variantSizes.sizeOption')->get();
    }

    public function getProductVariantById($variantId)
    {
        return $this->model->where('id', $variantId)->with('variantImages', 'variantSizes.inventory', 'variantSizes.sizeOption')->first();
    }

    public function getProductVariant($productId, $variantId)
    {
        return $this->model->where('product_id', $productId)->where('id', $variantId)->with('variantImages', 'variantSizes.inventory', 'variantSizes.sizeOption')->first();
    }

    public function getProductVariantBySlug($slug)
    {
        return $this->model->where('slug', $slug)->with('product', 'variantImages', 'variantAttributes.attribute', 'variantAttributes.option')->first();
    }

    public function getPopularAllVariants()
    {
        return $this->model->with(
            'product',
            'variantImages',
            'variantSizes.inventory',
            'variantSizes.sizeOption',
        )->where('is_popular', true)->get();
    }

    public function createVariant($data, $productId)
    {
        return $this->model->where('product_id', $productId)->create($data);
    }

    public function updateVariant($productId, $id, $data)
    {
        $variant = $this->model->where('product_id', $productId)->where('id', $id)->first();
        if ($variant) {
            $variant->update($data);
        }

        return $variant;
    }

    public function deleteVariant($productId, $id)
    {
        return $this->model->where('product_id', $productId)->where('id', $id)->delete();
    }
}
