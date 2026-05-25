<?php

namespace App\Services\Seller\Image;

use App\Exceptions\AppException;
use App\Models\Seller;
use App\Repositories\Contracts\Image\ProductVariantImageRepositoryInterface;
use App\Repositories\Contracts\Product\ProductRepositoryInterface;
use App\Repositories\Contracts\Product\ProductVariantRepositoryInterface;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Storage;

class ProductVariantImageService
{
    public function __construct(
        private readonly ProductVariantImageRepositoryInterface $productVariantImageRepository,
        private readonly ProductVariantRepositoryInterface $productVariantRepository,
        private readonly ProductRepositoryInterface $productRepository
    ) {}

    public function store(array $data, $productId, $productVariantId)
    {
        $seller = $this->getSeller();
        $product = $this->productRepository->getProductByStore($seller->store->id, $productId);
        if (! $product) {
            throw new AppException('Ürün bulunamadı veya bu ürüne erişim yetkiniz yok');
        }
        $productVariant = $this->productVariantRepository->getProductVariantById($productVariantId);
        if (! $productVariant) {
            throw new AppException('Ürün varyantı bulunamadı');
        }

        return $this->productVariantImageRepository->store($data, $productVariant->id);
    }

    public function destroy($productId, $productVariantId, $id)
    {
        $seller = $this->getSeller();
        $product = $this->productRepository->getProductByStore($seller->store->id, $productId);
        if (! $product) {
            throw new AppException('Ürün bulunamadı veya bu ürüne erişim yetkiniz yok');
        }
        $productVariant = $this->productVariantRepository->getProductVariantById($productVariantId);
        if (! $productVariant) {
            throw new AppException('Ürün varyantı bulunamadı');
        }
        $image = $this->productVariantImageRepository->getImageByProductVariantIdAndId($productVariant->id, $id);

        if (! $image) {
            throw new AppException('Resim bulunamadı');
        }
        $image->delete();
        Storage::disk('public')->delete('productImages/' . $image->image);

        return true;
    }

    public function reorder($data, $productId, $productVariantId)
    {
        $seller = $this->getSeller();
        $product = $this->productRepository->getProductByStore($seller->store->id, $productId);
        if (! $product) {
            throw new AppException('Ürün bulunamadı veya bu ürüne erişim yetkiniz yok');
        }
        $productVariant = $this->productVariantRepository->getProductVariantById($productVariantId);
        if (! $productVariant) {
            throw new AppException('Ürün varyantı bulunamadı');
        }
        $images = $this->productVariantImageRepository->updateImageOrders($productVariant->id, $data);

        return true;
    }

    private function getSeller(): Seller
    {
        return auth('seller')->user() ?? throw new AuthenticationException('Satıcı bulunamadı.');
    }
}
