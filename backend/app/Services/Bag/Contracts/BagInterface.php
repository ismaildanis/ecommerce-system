<?php

namespace App\Services\Bag\Contracts;

interface BagInterface
{
    public function getBag();

    public function addToBag(int $variantSizeId, int $quantity);

    public function selectCampaign(int $campaignId): array;

    public function unselectCampaign(): array;

    public function allCampaigns();

    public function showBagItem($bagItemId);

    public function updateBagItem($bagItemId, $quantity);

    public function destroyBagItem($bagItemId);
}
