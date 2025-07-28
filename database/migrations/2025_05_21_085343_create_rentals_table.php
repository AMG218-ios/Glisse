<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->unsignedBigInteger('start_location_id');
            $table->foreign('start_location_id')->references('id')->on('location_stations')->onDelete('cascade');
            $table->unsignedBigInteger('end_location_id');
            $table->foreign('end_location_id')->references('id')->on('location_stations')->onDelete('cascade');
            $table->decimal('distance_traveled_km');
            $table->enum('status', ['active', 'completed', 'inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
