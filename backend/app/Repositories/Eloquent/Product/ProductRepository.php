<?php

namespace App\Repositories\Eloquent\Product;

use App\Models\Product;
use App\Repositories\Contracts\Product\ProductRepositoryInterface;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct(
        private readonly Product $model
    ) {}

    /**
     * Kategori ve varyantlarıyla birlikte ürünleri getirir.
     */
    public function getProductsWithCategory($perpage = 100)
    {
        $page = request('page', 1);

        return Cache::tags(['products'])->remember("products.page.$page", 3600, function () use ($perpage) {
            return $this->model
                ->with([
                    'category.parent',
                    'category.children',
                    'category.gender',
                    'variants.variantImages',
                    'variants.variantSizes.sizeOption',
                    'variants.variantSizes.inventory',
                ])
                ->orderBy('id')
                ->paginate($perpage);
        });
    }

    /**
     * Tek ürünü kategori ve varyantlarıyla getirir.
     */
    public function getProductWithCategory(int $id)
    {
        return Cache::tags(['products'])->remember("product.{$id}", 3600, function () use ($id) {
            return $this->model
                ->with([
                    'category.parent',
                    'category.children',
                    'category.gender',
                    'variants.variantImages',
                    'variants.variantSizes.sizeOption',
                    'variants.variantSizes.inventory',
                ])
                ->find($id);
        });
    }

    /**
     * Mağazaya ait ürünleri kategori ve varyantlarıyla getirir.
     */
    public function getProductsByStore(int $storeId)
    {
        return Cache::tags(['products', "store_{$storeId}_products"])->remember("store.{$storeId}.products", 3600, function () use ($storeId) {
            return $this->model
                ->with([
                    'category',
                    'category.parent',
                    'category.children',
                    'category.gender',
                    'variants.variantAttributes.attribute',
                    'variants.variantImages',
                    'variants.variantAttributes.option',
                ])
                ->where('store_id', $storeId)
                ->orderBy('id')
                ->get();
        });
    }

    public function getProductBySlugAndStore(int $storeId, string $slug)
    {
        return Cache::tags(['products', "store_{$storeId}_products"])->remember("store.{$storeId}.product_slug.{$slug}", 3600, function () use ($storeId, $slug) {
            return $this->model->with('store')->where('store_id', $storeId)->where('slug', $slug)->first();
        });
    }

    /**
     * Ürün oluştur.
     */
    public function createProduct(array $productData)
    {
        $product = $this->model->create($productData);
        Cache::tags(['products'])->flush();
        return $product;
    }

    /**
     * Ürün güncelle.
     */
    public function updateProduct(array $productData, int $storeId, int $id)
    {
        $product = $this->model->where('store_id', $storeId)->where('id', $id)->first();

        if (! $product) {
            return false;
        }

        $product->update($productData);
        Cache::tags(['products', "store_{$storeId}_products"])->flush();

        return $product->fresh();
    }

    /**
     * Toplu ürün oluştur.
     */
    public function bulkCreateProducts(array $productsData)
    {
        $created = [];

        foreach ($productsData as $productData) {
            $product = $this->model->create($productData);
            $created[] = $product;
        }

        Cache::tags(['products'])->flush();
        return $created;
    }

    /**
     * Ürünü sil + varyant resimlerini de temizle.
     */
    public function deleteProduct(int $storeId, int $id)
    {
        $product = $this->model->with('variants')->where('store_id', $storeId)->where('id', $id)->first();

        if (! $product) {
            return false;
        }

        if ($product->variants && is_array($product->variants)) {
            foreach ($product->variants as $variant) {
                if (is_array($variant->variantImages)) {
                    foreach ($variant->variantImages as $img) {
                        Storage::disk('public')->delete('productImages/' . $img);
                    }
                } else {
                    Storage::disk('public')->delete('productImages/' . $variant->variantImages);
                }
            }
        }

        $result = $product->delete();
        Cache::tags(['products', "store_{$storeId}_products"])->flush();
        return $result;
    }

    /**
     * Mağazaya ait tek ürünü getir.
     */
    public function getProductByStore(int $storeId, int $id)
    {
        return Cache::tags(['products', "store_{$storeId}_products"])->remember("store.{$storeId}.product_id.{$id}", 3600, function () use ($storeId, $id) {
            return $this->model
                ->with([
                    'category',
                    'category.parent',
                    'category.children',
                    'category.gender',
                    'variants.variantImages',
                    'variants.variantAttributes.attribute',
                    'variants.variantAttributes.option',
                ])
                ->where('store_id', $storeId)
                ->find($id);
        });
    }

    public function incrementStockQuantity(int $productId, int $quantity)
    {
        $result = $this->model->whereKey($productId)->increment('stock_quantity', $quantity);
        Cache::tags(['products'])->flush();
        return $result;
    }

    public function decrementStockQuantity(int $productId, int $quantity)
    {
        $result = $this->model->whereKey($productId)->decrement('stock_quantity', $quantity);
        Cache::tags(['products'])->flush();
        return $result;
    }

    public function incrementTotalSoldQuantity(int $productId, int $quantity)
    {
        $result = $this->model->whereKey($productId)->increment('total_sold_quantity', $quantity);
        Cache::tags(['products'])->flush();
        return $result;
    }

    public function decrementTotalSoldQuantity(int $productId, int $quantity)
    {
        $result = $this->model->whereKey($productId)->decrement('total_sold_quantity', $quantity);
        Cache::tags(['products'])->flush();
        return $result;
    }

    public function getProductBySlug(int $storeId, string $slug)
    {
        return Cache::tags(['products', "store_{$storeId}_products"])->remember("store.{$storeId}.product.{$slug}", 3600, function () use ($storeId, $slug) {
            return $this->model->where('store_id', $storeId)->where('slug', $slug)->first();
        });
    }
}
