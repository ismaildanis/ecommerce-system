<?php

namespace App\Repositories\Eloquent\Bag;

use App\Models\Bag;
use App\Repositories\Contracts\Bag\BagRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class BagRepository extends BaseRepository implements BagRepositoryInterface
{
    public function __construct(Bag $model)
    {
        $this->model = $model;
    }

    public function getBag($user)
    {
        return $this->model->where('bag_user_id', $user->id)->first();
    }

    public function createBag($user)
    {
        return $this->model->firstOrCreate(['bag_user_id' => $user->id]);
    }

    public function clearBagItems($bag)
    {
        return $bag->bagItems()->delete();
    }
}
