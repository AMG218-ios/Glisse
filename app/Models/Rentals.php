<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rentals extends Model
{
    /** @use HasFactory<\Database\Factories\RentalsFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicles::class);
    }

    public function startLocation()
    {
        return $this->belongsTo(Location_Station::class, 'start_location_id');
    }

    public function endLocation()
    {
        return $this->belongsTo(Location_Station::class, 'end_location_id');
    }

    public function payment()
    {
        return $this->hasOne(Payments::class);
    }


}
