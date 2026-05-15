<?php

namespace Database\Seeders\Main;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run()
    {
        $size = Attribute::create([
            'name' => 'Yaş Aralığı',
            'code' => 'age',
            'input_type' => 'select',
            'is_filterable' => true,
            'is_required' => true,
            'sort_order' => 2,
        ]);
    }
}
