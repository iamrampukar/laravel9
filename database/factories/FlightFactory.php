<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name'        => fake()->firstName(),
            'last_name'         => fake()->lastName(),
            'phone'             => fake()->phoneNumber(),
            'country'           => fake()->country(),
            'state'             => fake()->state(),
            'city'              => fake()->city(),
            'postal_code'       => fake()->postcode(),
            'salary'            => fake()->numberBetween(10000, 100000),
        ];
    }
}
