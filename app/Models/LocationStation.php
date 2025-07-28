<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationStation extends Model
{
    /** @use HasFactory<\Database\Factories\LocationStationFactory> */
    use HasFactory;

    public function vehicles()
    {
        return $this->hasMany(Vehicles::class, 'current_location');
    }


}
