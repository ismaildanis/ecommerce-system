<?php

namespace Database\Factories;

use App\Models\Seller;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seller_id' => Seller::factory(),
            'seller_name' => fake()->name(),
            'name' => fake()->company(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'image' => fake()->imageUrl(),
            'description' => fake()->sentence(),
            'email' => fake()->email(),
            'is_active' => fake()->boolean(),
        ];
    }
}
