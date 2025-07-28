<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationStationFactory extends Factory
{
public function definition(): array
{
return [
'name_place' => fake()->unique()->streetName(),
'latitude' => fake()->latitude(),
'longitude' => fake()->longitude(),
'capacity' => fake()->randomElement([10, 20, 30]),
];
}
}
