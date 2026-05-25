<?php

namespace App\Repositories\Contracts\Product;

interface ProductVariantRepositoryInterface
{
    public function getProductVariants(int $productId);

    public function getProductVariantById(int $variantId);

    public function getProductVariant(int $productId, int $variantId);

    public function getProductVariantBySlug(string $slug);

    public function getPopularAllVariants();

    public function createVariant(array $data, int $productId);

    public function updateVariant(int $productId, int $id, array $data);

    public function deleteVariant(int $productId, int $id);
}
