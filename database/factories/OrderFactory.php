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
        return [
            'product_id' => $this->faker->numberBetween(1, 10),
            'agent_id' => $this->faker->numberBetween(1, 10),
            'customer_id' => $this->faker->numberBetween(1, 10),
            'shipping_address' => $this->faker->address,
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(1, 10),
            'total' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['pending', 'processing', 'shipped', 'delivered', 'cancelled']),
            'payment_method' => $this->faker->randomElement(['cash', 'credit card', 'debit card']),
            'payment_status' => $this->faker->randomElement(['paid', 'unpaid']),
            'notes' => $this->faker->text,
        ];
    }
}
