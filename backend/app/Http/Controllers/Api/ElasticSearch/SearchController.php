<?php

namespace App\Http\Controllers\Api\ElasticSearch;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\ElasticSearch\ElasticProductResource;
use App\Services\Search\ElasticSearchProductService;
use App\Services\Search\ElasticSearchTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SearchController extends Controller
{
    public function __construct(
        private readonly ElasticSearchTypeService $elasticSearchTypeService,
        private readonly ElasticSearchProductService $elasticSearchProductService
    ) {}

    public function search(Request $request)
    {
        $cacheKey = 'search' . md5(json_encode($request->all()));

        $responseData = Cache::remember($cacheKey, 600, function () use ($request) {
            $query = $request->input('q', '');
            $filters = $this->elasticSearchTypeService->filterType($request);
            $sorting = $this->elasticSearchTypeService->sortingType($request);

            $data = $this->elasticSearchProductService->searchProducts(
                $query,
                $filters,
                $sorting,
                $request->input('page', 1),
                $request->input('size', 12)
            );

            if (empty($data['products'])) {
                return null;
            }

            return [
                'total' => $data['results']['total'],
                'page' => $request->input('page', 1),
                'size' => $request->input('size', 12),
                'query' => $query ?? null,
                'products' => ElasticProductResource::collection($data['products'])->resolve(),
            ];
        });

        if (! $responseData) {
            return ResponseHelper::notFound('Ürün bulunamadı.', [
                'total' => 0,
                'page' => $request->input('page', 1),
                'size' => $request->input('size', 12),
                'query' => $query ?? null,
                'products' => [],
            ]);
        }
        return response()->json($responseData);
    }
}
