<?php

namespace App\Traits;

use Illuminate\Auth\AuthenticationException;
use App\Repositories\Contracts\AuthenticationRepositoryInterface;

trait GetUser
{

    public function getUser()
    {
        $user = $this->authenticationRepository->getUser();
        if (! $user) {
            throw new AuthenticationException('Kullanıcı bulunamadı.');
        }

        return $user;
    }
}
