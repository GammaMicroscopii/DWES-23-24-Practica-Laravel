<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'calle' => fake()->streetName(),
            'ciudad' => fake()->city(),
            'comuna' => fake()->words(4, true),
            'numero' => fake()->numberBetween(1, 1000)
        ];
    }
}
