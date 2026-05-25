<?php

namespace App\Repositories\Eloquent\User;

use App\Models\UserAddress;
use App\Repositories\Contracts\User\AddressesRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class AddressesRepository implements AddressesRepositoryInterface
{
    public function __construct(
        private readonly UserAddress $model
    ) {}

    public function getAddressesByUserId(int $userId)
    {
        return Cache::tags(["user_{$userId}_addresses"])->remember("user.{$userId}.addresses", 3600, function () use ($userId) {
            return $this->model->where('user_id', $userId)->get();
        });
    }

    public function getAddressById(int $id, int $userId)
    {
        return Cache::tags(["user_{$userId}_addresses"])->remember("user.{$userId}.address.{$id}", 3600, function () use ($id, $userId) {
            return $this->model->where('user_id', $userId)
                ->where('id', $id)
                ->first();
        });
    }

    public function createAddress(array $data, int $userId)
    {
        $data['user_id'] = $userId;
        $address = $this->model->create($data);

        Cache::tags(["user_{$userId}_addresses"])->flush();
        return $address;
    }

    public function updateAddress(array $data, int $id, int $userId)
    {
        $address = $this->model->where('user_id', $userId)->where('id', $id)->first();
        if (! $address) {
            return null;
        }
        $address->update($data);

        Cache::tags(["user_{$userId}_addresses"])->flush();
        return $address;
    }

    public function deleteAddress(int $id, int $userId)
    {
        $address = $this->model->where('user_id', $userId)->where('id', $id)->first();
        if (! $address) {
            return null;
        }
        $address->delete();

        Cache::tags(["user_{$userId}_addresses"])->flush();
        return true;
    }
}
