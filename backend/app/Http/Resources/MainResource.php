<?php

namespace App\Http\Resources;

use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Summary\CampaignSummaryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MainResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'products' => ProductResource::collection($this->resource['products']),
            'categories' => CategoryResource::collection($this->resource['categories']),
            'campaigns' => CampaignSummaryResource::collection($this->resource['campaigns']),
        ];
    }
}
