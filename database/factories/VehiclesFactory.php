<?php



namespace Database\Factories;

use App\Models\LocationStation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class VehiclesFactory extends Factory
{
public function definition(): array
{
$location = LocationStation::inRandomOrder()->first();

return [
'type' => fake()->randomElement(['bike', 'scooter']),
'status' => fake()->randomElement(['available', 'in use', 'in maintenance']),
'current_location' => $location ? $location->name_place : 'Unknown',
'battery_level' => Arr::random([10, 20, 30, 40, 50, 60, 70, 80, 90, 100]),
'is_active' => fake()->randomElement(['yes', 'no']),
];
}
}
