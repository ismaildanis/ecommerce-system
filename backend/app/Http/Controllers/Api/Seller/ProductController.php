<?php

namespace App\Http\Controllers\Api\Seller;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\Product\ProductStoreRequest;
use App\Http\Requests\Seller\Product\ProductUpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Services\Seller\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        private readonly ProductService $productService
    ) {}

    public function index()
    {
        $products = $this->productService->indexProduct();

        return ProductResource::collection($products->load($this->getProductLoadRelations()));
    }

    public function store(ProductStoreRequest $request)
    {
        $product = $this->productService->createProduct($request->validated());

        return new ProductResource(
            $product->load($this->getProductLoadRelations())
        );
    }

    public function productDetail($id)
    {
        $product = $this->productService->productDetail($id);

        return new ProductResource(
            $product->load($this->getProductLoadRelations()));
    }

    public function update(ProductUpdateRequest $request, $id)
    {
        $data = $request->validated();
        $product = $this->productService->updateProduct($data, $id);

        return new ProductResource($product->load($this->getProductLoadRelations()));
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);

        return ResponseHelper::success('Ürün başarıyla silindi.');
    }

    protected function getProductLoadRelations()
    {
        return [
            'category.parent',
            'category.gender',
            'variants.variantAttributes.attribute',
            'variants.variantImages',
            'variants.variantAttributes.option',
            'variants.variantSizes.inventory',
            'variants.variantSizes.sizeOption',
        ];
    }
}
