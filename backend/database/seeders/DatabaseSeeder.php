<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Campaigns\CampaignProductSeeder;
use Database\Seeders\Campaigns\CampaignSeeder;
use Database\Seeders\Main\AttributeOptionSeeder;
use Database\Seeders\Main\AttributeSeeder;
use Database\Seeders\Main\CategorySeeder;
use Database\Seeders\Main\GenderSeeder;
use Database\Seeders\Main\ProductSeeder;
use Database\Seeders\Main\ProductVariantImageSeeder;
use Database\Seeders\Main\UserSeeder;
use Database\Seeders\Main\VariantAttributeSeeder;
use Database\Seeders\Main\WarehouseSeeder;
use Database\Seeders\PaymentProviders\Iyzico;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            GenderSeeder::class,
            CategorySeeder::class,
            AttributeSeeder::class,
            AttributeOptionSeeder::class,
            WarehouseSeeder::class,
            SellerSeeder::class,
            StoreSeeder::class,
            ProductSeeder::class,
            ProductVariantImageSeeder::class,
            VariantAttributeSeeder::class,
            UserSeeder::class,

            Iyzico::class,

            CampaignSeeder::class,
            CampaignProductSeeder::class,
        ]);
    }
}
