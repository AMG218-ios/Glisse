<?php


namespace Database\Factories;

use App\Models\LocationStation;
use App\Models\User;
use App\Models\Vehicles;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalsFactory extends Factory
{
public function definition(): array
{
return [
    'user_id' => User::factory(),
    'vehicle_id' => Vehicles::factory(),
    'start_time' => fake()->dateTimeBetween('-1 days', '-1 hours'),
    'end_time' => fake()->dateTimeBetween('-1 hours', 'now'),
    'start_location_id' => LocationStation::factory(),
    'end_location_id' => LocationStation::factory(),
    'distance_traveled_km' => fake()->randomFloat(2, 0.5, 30),
    'status' => fake()->randomElement(['active', 'completed', 'inactive']),
];
}
}
