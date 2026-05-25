<?php

namespace App\Services\Auth;

use App\Models\User;

// ileriki profil aşamaları için kalıcak
class ProfileService
{
    public function updateUserProfile(User $user, array $data): User
    {
        $user->update($data);

        return $user;
    }
}
