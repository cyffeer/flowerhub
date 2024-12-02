<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $flowerNames = [
            'Rose', 'Tulip', 'Daisy', 'Sunflower', 'Lily', 
            'Orchid', 'Carnation', 'Daffodil', 'Iris', 'Peony'
        ];
        return [
            'name'=> fake()->randomElement($flowerNames),
            'description'=> fake()->sentence(),
            'location'=> fake()->city(),
            'quantity'=> fake()->numberBetween(1, 10),
        ];
    }
}
