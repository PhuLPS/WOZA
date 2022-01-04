<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CatagoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'catagory_name' => $this->faker->name(),
        ];
    }
}
