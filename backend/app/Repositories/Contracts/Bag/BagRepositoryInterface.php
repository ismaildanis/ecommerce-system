<?php

namespace App\Repositories\Contracts\Bag;

interface BagRepositoryInterface
{
    public function getBag($user);

    public function createBag($user);

    public function clearBagItems($bag);
}
