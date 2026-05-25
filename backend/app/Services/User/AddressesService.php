<?php

namespace App\Services\User;

use App\Models\User;
use App\Repositories\Contracts\User\AddressesRepositoryInterface;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AddressesService
{
    public function __construct(
        private readonly AddressesRepositoryInterface $addressesRepository,
    ) {}

    public function indexAddresses()
    {
        $user = $this->getUser();
        $addresses = $this->addressesRepository->getAddressesByUserId($user->id);

        return $addresses;
    }

    public function storeAddresses(array $data)
    {
        $user = $this->getUser();

        return $this->addressesRepository->createAddress($data, $user->id);
    }

    public function showAddresses($id)
    {
        $user = $this->getUser();
        $address = $this->addressesRepository->getAddressById($id, $user->id);
        if (! $address) {
            throw new ModelNotFoundException('Adres bulunamadı.');
        }

        return $address;
    }

    public function updateAddresses(array $data, $id)
    {
        $user = $this->getUser();
        $address = $this->addressesRepository->updateAddress($data, $id, $user->id);
        if (! $address) {
            throw new ModelNotFoundException('Adres bulunamadı.');
        }

        return $address;
    }

    public function destroyAddresses($id)
    {
        $user = $this->getUser();
        $address = $this->addressesRepository->deleteAddress($id, $user->id);
        if (! $address) {
            throw new ModelNotFoundException('Adres bulunamadı.');
        }

        return true;
    }

    private function getUser(): User
    {
        return auth('user')->user() ?? throw new AuthenticationException('Kullanıcı bulunamadı.');
    }
}
