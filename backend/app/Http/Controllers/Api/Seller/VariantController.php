<?php

namespace App\Http\Controllers\Api\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\Product\StoreProductVariantRequest;
use App\Http\Requests\Seller\Product\UpdateProductVariantRequest;
use App\Http\Resources\Product\ProductVariantResource;
use App\Services\Product\ProductVariantService;
use Illuminate\Support\Facades\Response;

class VariantController extends Controller
{
    public function __construct(
        private readonly ProductVariantService $variantService
    ) {}

    public function index(int $productId)
    {
        $variants = $this->variantService->index($productId);

        return Response::json(ProductVariantResource::collection($variants));
    }

    public function store(StoreProductVariantRequest $request, int $productId)
    {
        $variant = $this->variantService->store($request->all(), $productId);

        return Response::json(new ProductVariantResource($variant));
    }

    public function show(int $productId, int $id)
    {
        $variant = $this->variantService->show($productId, $id);

        return Response::json(new ProductVariantResource($variant));
    }

    public function update(UpdateProductVariantRequest $request, int $productId, int $id)
    {
        $variant = $this->variantService->update($productId, $id, $request->all());

        return Response::json(new ProductVariantResource($variant));
    }

    public function destroy(int $productId, int $id)
    {
        $variant = $this->variantService->destroy($productId, $id);

        return Response::json($variant);
    }
}
