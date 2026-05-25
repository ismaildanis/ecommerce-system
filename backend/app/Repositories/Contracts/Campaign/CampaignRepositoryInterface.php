<?php

namespace App\Repositories\Contracts\Campaign;

interface CampaignRepositoryInterface
{
    public function getActiveCampaigns();

    public function getActiveCampaign($campaignId);

    public function getCampaignsByStoreId($storeId);

    public function getCampaignByStoreId($storeId, $id);

    public function createCampaign(array $campaignData);

    public function updateCampaign(array $campaignData, $id);

    public function deleteCampaign($id);
}
