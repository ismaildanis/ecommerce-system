<?php

namespace App\Repositories\Contracts\User;

use App\Models\User;

interface UserRepositoryInterface
{
    public function createUser(array $data): User;
}
