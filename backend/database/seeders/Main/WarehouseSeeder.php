<?php

namespace Database\Seeders\Main;

use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    public function run()
    {
        Warehouse::create([
            'name' => 'Merkez Depo',
            'code' => 'MAIN',
            'is_default' => true,
            'is_active' => true,
        ]);
    }
}
