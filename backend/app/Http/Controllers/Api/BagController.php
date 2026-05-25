<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Bag\BagStoreRequest;
use App\Http\Requests\Bag\SelectBagCampaignRequest;
use App\Http\Resources\Bag\BagResource;
use App\Services\Bag\Contracts\BagInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BagController extends Controller
{
    public function __construct(
        private readonly BagInterface $bagService
    ) {}

    public function index()
    {
        $bag = $this->bagService->getBag();

        return new BagResource($bag);
    }

    public function store(BagStoreRequest $request)
    {
        $data = $request->validated();

        $this->bagService->addToBag(
            $data['variant_size_id'],
            $data['quantity'] ?? 1
        );

        $bagData = $this->bagService->getBag();

        return new BagResource($bagData);
    }

    public function select(SelectBagCampaignRequest $request)
    {
        $campaignId = $request->integer('campaign_id');

        $result = $this->bagService->selectCampaign($campaignId);

        return new BagResource($result);
    }

    public function unSelectCampaign()
    {
        $result = $this->bagService->unSelectCampaign();

        return new BagResource($result);
    }

    public function show($id)
    {
        $bagItem = $this->bagService->showBagItem($id);
        if (! $bagItem) {
            return ResponseHelper::error('Ürün bulunamadı!', 404);
        }

        return ResponseHelper::success('Ürün', $bagItem);
    }

    public function update(Request $request, $id)
    {
        $quantity = $request->input('quantity');

        if ($quantity < 1) {
            return ResponseHelper::error('Ürün adedi 1\'den az olamaz!', 400);
        }

        $bagItem = $this->bagService->updateBagItem($id, $request->quantity);

        if (isset($bagItem['error'])) {
            return ResponseHelper::error($bagItem['error'], 400);
        }

        return ResponseHelper::success('Ürün adedi güncellendi.', $bagItem);
    }

    public function destroy($id)
    {
        $result = $this->bagService->destroyBagItem($id);

        if (isset($result['error'])) {
            return ResponseHelper::error($result['error'], 400);
        }

        return ResponseHelper::success($result['message'] ?? 'Ürün sepetten silindi.');
    }
}
