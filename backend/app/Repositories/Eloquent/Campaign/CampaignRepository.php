<?php

namespace App\Repositories\Eloquent\Campaign;

use App\Models\Campaign;
use App\Repositories\Contracts\Campaign\CampaignRepositoryInterface;

use Illuminate\Support\Facades\Cache;

class CampaignRepository implements CampaignRepositoryInterface
{
    public function __construct(
        private readonly Campaign $model
    ) {}

    public function getActiveCampaigns()
    {
        return Cache::tags(['campaigns'])->remember('campaigns.active', 3600, function () {
            return $this->model->where('is_active', 1)->orderBy('id')->get();
        });
    }

    public function getActiveCampaign(int $campaignId)
    {
        return Cache::tags(['campaigns'])->remember("campaign.active.{$campaignId}", 3600, function () use ($campaignId) {
            return $this->model->where('is_active', 1)->where('id', $campaignId)->first();
        });
    }

    public function getCampaignsByStoreId(int $storeId)
    {
        return Cache::tags(['campaigns', "store_{$storeId}_campaigns"])->remember("store.{$storeId}.campaigns", 3600, function () use ($storeId) {
            return $this->model->with('campaignProducts', 'campaignCategories')->where('store_id', $storeId)->orderBy('id')->get();
        });
    }

    public function getCampaignByStoreId(int $storeId, int $id)
    {
        return Cache::tags(['campaigns', "store_{$storeId}_campaigns"])->remember("store.{$storeId}.campaign.{$id}", 3600, function () use ($storeId, $id) {
            return $this->model->with('campaignProducts', 'campaignCategories')->where('store_id', $storeId)->where('id', $id)->first();
        });
    }

    public function createCampaign(array $campaignData)
    {
        $campaign = $this->model->create($campaignData);

        Cache::tags(['campaigns'])->flush();

        return $campaign;
    }

    public function updateCampaign(array $campaignData, int $id)
    {
        $campaign = $this->model->find($id);
        if ($campaign) {
            $campaign->update($campaignData);

            Cache::tags(['campaigns'])->flush();

            return $campaign;
        }

        return false;
    }

    public function deleteCampaign(int $id)
    {
        $campaign = $this->model->find($id);
        if ($campaign) {
            $result = $campaign->delete();

            Cache::tags(['campaigns'])->flush();

            return $result;
        }

        return false;
    }
}
