<?php

namespace App\Repositories\Contracts\Inventory;

interface InventoryRepositoryInterface
{
    public function lockForUpdate(int|string $id);

    public function decrementStock(int $variantSizeId, int $quantity): void;

    public function checkStock(int $variantSizeId, int $quantity): bool;

    public function updateStock(int $variantSizeId, array $data): void;
}
