<?php

namespace App\Repositories\Contracts\Image;

interface ProductVariantImageRepositoryInterface
{
    public function store(array $data, int $productVariantId);

    public function getImageByProductVariantIdAndId(int $productVariantId, int $id);

    public function updateImageOrders(int $productVariantId, array $data);
}
