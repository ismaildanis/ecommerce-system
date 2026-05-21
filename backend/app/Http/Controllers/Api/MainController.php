<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\MainResource;
use App\Http\Resources\Product\ProductResource;
use App\Services\MainService;
use App\Services\Search\ElasticSearchProductService;
use App\Services\Search\ElasticSearchTypeService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct(
        private readonly ElasticSearchTypeService $elasticSearchTypeService,
        private readonly ElasticSearchProductService $elasticSearchProductService,
        private readonly MainService $mainService
    ) {}

    /** @unauthenticated */
    public function main()
    {
        $products = $this->mainService->getProductsPopularVariants();
        $categories = $this->mainService->getCategories();
        $categories->load('gender');

        $campaigns = $this->mainService->getCampaigns();

        return new MainResource([
            'products' => $products,
            'categories' => $categories,
            'campaigns' => $campaigns,
        ]);
    }

    /** @unauthenticated */
    public function filter(Request $request)
    {
        $filters = $this->elasticSearchTypeService->filterType($request);

        $data = $this->elasticSearchProductService->filterProducts(
            $filters,
            $request->input('page', 1),
            $request->input('size', 12)
        );

        return ResponseHelper::success('Filtre Sonucu', [
            'total' => $data['results']['total'],
            'page' => $request->input('page', 1),
            'size' => $request->input('size', 12),
            'filters' => $filters,
            'products' => ProductResource::collection($data['products']),
        ]);
    }
}
