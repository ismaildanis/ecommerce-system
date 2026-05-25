<?php

namespace App\Repositories\Contracts;

use App\Models\Seller;
use App\Models\User;

interface AuthenticationRepositoryInterface
{
    public function getUser(): ?User;
    public function getSeller(): ?Seller;

}
