<?php

namespace App\Repositories\Contracts\Campaign;

interface CampaignRepositoryInterface
{
    public function getActiveCampaigns();

    public function getActiveCampaign(int $campaignId);

    public function getCampaignsByStoreId(int $storeId);

    public function getCampaignByStoreId(int $storeId, int $id);

    public function createCampaign(array $campaignData);

    public function updateCampaign(array $campaignData, int $id);

    public function deleteCampaign(int $id);
}
