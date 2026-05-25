<?php

namespace App\Repositories\Contracts\Bag;

use App\Models\Bag;

interface BagRepositoryInterface
{
    public function getBag(int $userId);

    public function createBag(int $userId);

    public function clearBagItems(Bag $bag);
}
