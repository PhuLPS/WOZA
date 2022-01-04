<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 50),
            'price' => $this->faker->numberBetween($min = 1500, $max = 6000),
            'catagory_id' => $this->faker->numberBetween($min = 1, $max = 5)
        ];
    }
}
