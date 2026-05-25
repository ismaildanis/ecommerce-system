<?php

namespace App\Repositories\Eloquent\User;

use App\Models\UserAddress;
use App\Repositories\Contracts\User\AddressesRepositoryInterface;
class AddressesRepository implements AddressesRepositoryInterface
{
    protected UserAddress $model;

    public function __construct(UserAddress $model)
    {
        $this->model = $model;
    }

    public function getAddressesByUserId($userId)
    {
        return $this->model->where('user_id', $userId)->get();
    }

    public function getAddressById($id, $userId)
    {
        return $this->model->where('user_id', $userId)
            ->where('id', $id)
            ->first();
    }

    public function createAddress(array $data, $userId)
    {
        $data['user_id'] = $userId;

        return $this->model->create($data);
    }

    public function updateAddress(array $data, $id, $userId)
    {
        $address = $this->getAddressById($id, $userId);
        if (! $address) {
            return null;
        }
        $address->update($data);

        return $address;
    }

    public function deleteAddress($id, $userId)
    {
        $address = $this->getAddressById($id, $userId);
        if (! $address) {
            return null;
        }
        $address->delete();

        return true;
    }
}
