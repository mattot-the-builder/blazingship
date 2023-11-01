<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Agent;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'mattot',
            'email' => 'mattot@blazingbyte.co',
        ]);

        Agent::factory(100)->create();
        Customer::factory(300)->create();
        Category::factory(50)->create();
        Product::factory(1000)->create();
        Order::factory(5000)->create();

    }
}
