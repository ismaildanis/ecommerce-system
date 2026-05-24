<?php

namespace App\Repositories\Contracts;

use App\Models\Seller;
use App\Models\User;

interface AuthenticationRepositoryInterface
{
    /**
     * Mevcut kullanıcıyı getir (API veya Web)
     */
    public function getUser(): ?User;
    
    /**
     * Mevcut satıcıyı getir (API veya Web)
     */
    public function getSeller(): ?Seller;

}
