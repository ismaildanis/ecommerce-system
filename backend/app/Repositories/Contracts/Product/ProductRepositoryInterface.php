<?php

namespace App\Repositories\Contracts\Product;

interface ProductRepositoryInterface
{
    // Ürün + kategori ilişkileri
    public function getProductsWithCategory($perPage = 100);

    public function getProductWithCategory(int $id);

    public function getProductsByStore(int $storeId);

    public function getProductByStore(int $storeId, int $id);

    public function getProductBySlug(int $storeId, string $slug);

    // CRUD
    public function createProduct(array $productData);

    public function updateProduct(array $productData, int $storeId, int $id);

    public function deleteProduct(int $storeId, int $id);

    public function bulkCreateProducts(array $productsData);

    // Stok ve satış işlemleri
    public function incrementStockQuantity(int $productId, int $quantity);

    public function decrementStockQuantity(int $productId, int $quantity);

    public function incrementTotalSoldQuantity(int $productId, int $quantity);

    public function decrementTotalSoldQuantity(int $productId, int $quantity);
}
