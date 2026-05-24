<?php

namespace App\Services\Auth;

use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SellerLoginService
{
    public function login(array $credentials): array
    {
        $seller = Seller::where('email', $credentials['email'])->first();

        if (! $seller || ! Hash::check($credentials['password'], $seller->password)) {
            throw ValidationException::withMessages([
                'email' => ['Email veya Şifre Hatalı'],
            ]);
        }

        $token = $seller->createToken('seller-token')->plainTextToken;

        return [
            'token' => $token,
            'seller' => $seller,
        ];
    }
}
