<?php

namespace App\Http\Resources\Summary;

use Illuminate\Http\Resources\Json\JsonResource;

class VariantSizeSummaryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'size_option' => new AttributeOptionSummaryResource($this->whenLoaded('sizeOption')),
            'price_cents' => $this->price_cents,
        ];
    }
}
