<?php

namespace App\Http\Controllers\Api\User;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\AddressesStoreRequest;
use App\Http\Requests\User\AddressesUpdateRequest;
use App\Services\User\AddressesService;

class AddressesController extends Controller
{
    public function __construct(
       private readonly AddressesService $addressesService
    ) {}

    public function index()
    {
        $addresses = $this->addressesService->indexAddresses();

        return ResponseHelper::success('Adresler başarıyla getirildi', $addresses);
    }

    public function store(AddressesStoreRequest $request)
    {
        $address = $this->addressesService->storeAddresses($request->validated());

        return ResponseHelper::success('Adres başarıyla oluşturuldu', $address);
    }

    public function show($id)
    {
        $addressData = $this->addressesService->showAddresses($id);

        return ResponseHelper::success('Adres başarıyla getirildi', $addressData);
    }

    public function update(AddressesUpdateRequest $request, $id)
    {
        $validatedData = $request->validated();

        $nullableFields = ['address_line_2', 'postal_code', 'notes'];
        foreach ($nullableFields as $field) {
            if (isset($validatedData[$field]) && $validatedData[$field] === '') {
                $validatedData[$field] = null;
            }
        }

        $address = $this->addressesService->updateAddresses($validatedData, $id);

        return ResponseHelper::success('Adres başarıyla güncellendi', $address);
    }

    public function destroy($id)
    {
        $address = $this->addressesService->destroyAddresses($id);

        return ResponseHelper::success('Adres başarıyla silindi', $address);
    }
}
