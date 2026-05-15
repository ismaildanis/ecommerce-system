<?php

namespace Database\Factories;

use App\Models\Campaign;
use App\Models\CampaignDiscount;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CampaignDiscount>
 */
class CampaignDiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'campaign_id' => Campaign::factory(),
            'discount_type' => fake()->randomElement(['percentage', 'fixed', 'x_buy_y_pay']),
            'discount_value' => json_encode(['percentage' => 10]),
        ];
    }
}
