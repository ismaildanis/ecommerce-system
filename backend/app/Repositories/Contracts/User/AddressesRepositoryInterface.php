<?php

namespace App\Repositories\Contracts\User;

interface AddressesRepositoryInterface
{
    public function getAddressesByUserId(int $userId);

    public function getAddressById(int $id, int $userId);

    public function createAddress(array $data, int $userId);

    public function updateAddress(array $data, int $id, int $userId);

    public function deleteAddress(int $id, int $userId);
}
