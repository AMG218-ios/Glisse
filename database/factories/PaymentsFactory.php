<?php


namespace Database\Factories;

use App\Models\Rentals;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentsFactory extends Factory
{
public function definition(): array
{
return [
'user_id' => User::factory(),
'rental_id' => Rentals::factory(),
'amount' => fake()->randomFloat(2, 8, 140),
'payment_method' => fake()->randomElement(['card', 'Paypal', 'visa']),
'payment_status' => fake()->randomElement(['pending', 'successful', 'failed']),
];
}
}
