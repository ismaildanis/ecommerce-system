<?php

namespace App\Http\Controllers\Api\ElasticSearch;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResource;
use App\Services\MainService;
use App\Services\Search\ElasticSearchProductService;
use App\Services\Search\ElasticSearchTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoryFilterController extends Controller
{
    public function __construct(
        private readonly ElasticSearchTypeService $elasticSearchTypeService,
        private readonly ElasticSearchProductService $elasticSearchProductService,
        private readonly MainService $mainService
    ) {}

    public function categoryFilter(Request $request, string $category_slug)
    {
        $cacheKey = 'category_filter_' . $category_slug . '_' . md5(json_encode($request->all()));

        $responseData = Cache::remember($cacheKey, 600, function () use ($request, $category_slug) {
            $categories = $this->mainService->getCategory($category_slug);

            if (! $categories) {
                return null;
            }

            $request->merge([
                'category_ids' => $categories->pluck('id')->toArray(),
            ]);

            $filters = $this->elasticSearchTypeService->filterType($request);
            $filters['sorting'] = $request->input('sorting', '');

            $data = $this->elasticSearchProductService->filterProducts(
                $filters,
                $filters['sorting'],
                $request->input('page', 1),
                $request->input('size', 1000)
            );

            return [
                'products' => $data['products'],
                'filters' => $filters,
                'categories' => CategoryResource::collection($categories)->resolve(),
                'total' => $data['results']['total'],
                'pagination' => [
                    'page' => $request->input('page', 1),
                    'size' => $request->input('size', 1000),
                ],
            ];
        });

        if (! $responseData) {
            return ResponseHelper::notFound('Kategori bulunamadı.');
        }

        return response()->json($responseData);
    }
}
