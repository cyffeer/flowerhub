<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flower>
 */
class FlowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'age' => fake()->numberBetween(1,100),
            'bio' => fake()->paragraph(),
            'order_id' => function () {
                return Order::query()
                    ->inRandomOrder()
                    ->first()
                    ?->id ?? Order::factory()->create()->id;
            },
        ];
    }
}
