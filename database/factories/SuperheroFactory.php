<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuperheroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'strength' => $this->faker->numberBetween(30, 100),
            'speed' => $this->faker->numberBetween(30, 100),
            'intelligence' => $this->faker->numberBetween(30, 100),
        ];
    }
}
