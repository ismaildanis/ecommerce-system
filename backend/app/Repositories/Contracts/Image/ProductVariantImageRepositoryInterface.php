<?php

namespace App\Repositories\Contracts\Image;

interface ProductVariantImageRepositoryInterface
{
    public function store(array $data, $productVariantId);

    public function getImageByProductVariantIdAndId($productVariantId, $id);

    public function updateImageOrders(int $productVariantId, array $data);
}
