<?php

namespace App\Repositories\Eloquent\Image;

use App\Models\ProductVariantImage;
use App\Repositories\Contracts\Image\ProductVariantImageRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class ProductVariantImageRepository implements ProductVariantImageRepositoryInterface
{
    public function __construct(
        private readonly ProductVariantImage $model
    ) {}

    public function store(array $data, int $productVariantId)
    {
        $data['product_variant_id'] = $productVariantId;
        $image = $this->model->create($data);

        Cache::tags(['products'])->flush();
        return $image;
    }

    public function getImageByProductVariantIdAndId(int $productVariantId, int $id)
    {
        return Cache::tags(['products'])->remember("variant.{$productVariantId}.image.{$id}", 3600, function () use ($productVariantId, $id) {
            return $this->model->where('product_variant_id', $productVariantId)->where('id', $id)->first();
        });
    }

    public function updateImageOrders(int $productVariantId, array $data)
    {
        DB::transaction(function () use ($productVariantId, $data) {
            $this->model->where('product_variant_id', $productVariantId)->update(['is_primary' => false]);
            foreach ($data as $d) {
                $this->model->where('product_variant_id', $productVariantId)
                    ->where('id', $d['id'])
                    ->update([
                        'sort_order' => $d['sort_order'],
                        'is_primary' => $d['sort_order'] === 1,
                    ]);
            }
        });

        $images = $this->model
            ->where('product_variant_id', $productVariantId)
            ->orderBy('sort_order')
            ->get();

        Cache::tags(['products'])->flush();
        return $images;
    }
}
