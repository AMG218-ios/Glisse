<?php

// DatabaseSeeder.php

namespace Database\Seeders;

use App\Models\LocationStation;
use App\Models\Payments;
use App\Models\Rentals;
use App\Models\User;
use App\Models\Vehicles;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create fixed locations
        $stations = [
            ['name_place' => 'Hotel Carlton Lyon - Mc Gallery', 'latitude' => -34.11594, 'longitude' => -149.554505, 'capacity' => 20],
            ['name_place' => 'CROUS student residences', 'latitude' => 45.760452, 'longitude' => 4.853126, 'capacity' => 15],
            ['name_place' => 'Carrefour Supermarche', 'latitude' => 46.204391, 'longitude' => 6.143158, 'capacity' => 25],
            ['name_place' => "Parc de la Tete d'Or", 'latitude' => 45.784, 'longitude' => 4.852, 'capacity' => 30],
        ];

        foreach ($stations as $station) {
            LocationStation::firstOrCreate(['name_place' => $station['name_place']], $station);
        }

        // Create users
        $users = User::factory(10)->create();

        // Get all location names for reference
        $locations = LocationStation::all();

        // Create vehicles
        $vehicles = Vehicles::factory(20)->create();

        // Create rentals
        $rentals = Rentals::factory(30)->make()->each(function ($rental) use ($users, $vehicles, $locations) {
            $rental->user_id = $users->random()->id;
            $rental->vehicle_id = $vehicles->random()->id;
            $rental->start_location_id = $locations->random()->id;
            $rental->end_location_id = $locations->random()->id;
            $rental->save();
        });

        // Create payments
        foreach ($rentals as $rental) {
            Payments::factory()->create([
                'user_id' => $rental->user_id,
                'rental_id' => $rental->id,
            ]);
        }
    }
}
