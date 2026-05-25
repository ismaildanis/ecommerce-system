<?php

namespace App\Repositories\Eloquent\Bag;

use App\Models\Bag;
use App\Repositories\Contracts\Bag\BagRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class BagRepository implements BagRepositoryInterface
{
    public function __construct(
        private readonly Bag $model
    ) {}

    public function getBag(int $userId)
    {
        return Cache::tags(["bag_user_{$userId}"])
            ->remember(
                "user_{$userId}_bag",
                3600,
                function () use ($userId) {
                    return $this->model->where('bag_user_id', $userId)->first();
                }
            );
    }

    public function createBag(int $userId)
    {
        Cache::tags(["bag_user_{$userId}"])->flush();
        return $this->model->firstOrCreate(['bag_user_id' => $userId]);
    }

    public function clearBagItems(Bag $bag)
    {
        Cache::tags(["bag_user_{$bag->bag_user_id}"])->flush();
        return $bag->bagItems()->delete();
    }
}
