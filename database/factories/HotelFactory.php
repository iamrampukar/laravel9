<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
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
            'middle_name'       => fake()->name(),
            'last_name'         => fake()->lastName(),
            'age'               => fake()->numberBetween($min = 1, $max = 50),
            'address'           => fake()->city(),
            'phone'             => fake()->phoneNumber(),
            'time'              => fake()->time(),
            'date'              => fake()->date(),
            'role'              => fake()->jobTitle(),
            'is_activated'      => fake()->numberBetween($min = 0, $max = 1),
        ];
    }
}

// How To Run:
/*
    php artisan tinker
    Hotel::factory(100)->create()
*/












