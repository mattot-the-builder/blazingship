<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            'email' => fake()->safeEmail(),
            'phone_number_e164' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'country' => fake()->country(),
            'state' => fake()->state(),
            'zip' => fake()->randomNumber(),
            'payment_information' => fake()->creditCardNumber(),
        ];
    }
}
