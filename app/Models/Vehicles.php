<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    /** @use HasFactory<\Database\Factories\VehiclesFactory> */
    use HasFactory;

    public function rentals()
    {
        return $this->hasMany(Rentals::class);
    }

    public function location()
    {
        return $this->belongsTo(Location_Station::class, 'current_location_id');
    }


}
