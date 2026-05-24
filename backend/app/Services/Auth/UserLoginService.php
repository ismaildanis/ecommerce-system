<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserLoginService
{
    public function login(array $credentials): array
    {
        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Email veya Şifre Hatalı'],
            ]);
        }

        $token = $user->createToken('user-token')->plainTextToken;

        return [
            'token' => $token,
            'user' => $user,
        ];
    }
}
