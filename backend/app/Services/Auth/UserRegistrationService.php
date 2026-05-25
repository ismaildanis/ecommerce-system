<?php

namespace App\Services\Auth;

use App\Models\User;
use App\Repositories\Contracts\User\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;

class UserRegistrationService
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository
    ) {}

    public function registerUser(array $data): array
    {
        return DB::transaction(function () use ($data) {
            /** @var User $user */
            $user = $this->userRepository->createUser($data);

            $token = $user->createToken('user-token')->plainTextToken;

            return [
                'token' => $token,
                'user' => $user,
            ];
        });
    }
}
