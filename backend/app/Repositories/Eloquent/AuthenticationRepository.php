<?php

namespace App\Repositories\Eloquent;

use App\Models\Seller;
use App\Models\User;
use App\Repositories\Contracts\AuthenticationRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AuthenticationRepository implements AuthenticationRepositoryInterface
{
    /**
     * User
     */
    public function getUser(): ?User
    {
        return Auth::guard('user')->user();
    }

    /**
     * Seller
     */
    public function getSeller(): ?Seller
    {
        return Auth::guard('seller')->user();
    }
}
