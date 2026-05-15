<?php

namespace App\Traits;

use Illuminate\Auth\AuthenticationException;

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
