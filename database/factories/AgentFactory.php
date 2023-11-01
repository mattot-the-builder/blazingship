<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone_number_e164' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'registration_date' => $this->faker->date(),
            'role' => $this->faker->randomElement(['agent', 'stokis', 'dropship']),
            'total_sale' => $this->faker->randomNumber(),
            'earning' => $this->faker->randomFloat(2, 10.00, 1000.00),
            'payment_information' => $this->faker->text(),
        ];
    }
}
