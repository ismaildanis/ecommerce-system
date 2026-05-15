<?php

namespace Database\Seeders\Main;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    public function run()
    {
        $genders = [
            ['title' => 'Erkek Çocuk', 'slug' => 'erkek-cocuk'],
            ['title' => 'Kız Çocuk', 'slug' => 'kiz-cocuk'],
            ['title' => 'Unisex', 'slug' => 'unisex'],
        ];

        foreach ($genders as $gender) {
            Gender::create($gender);
        }
    }
}
