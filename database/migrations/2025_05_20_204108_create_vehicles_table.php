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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20);
            $table->enum('status', ['available', 'in use', 'in maintenance']);
            $table->string('current_location');
            $table->foreign('current_location')->references('name_place')->on('location_stations');
            $table->decimal('battery_level')->nullable();
            $table->enum('is_active', ['yes', 'no']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
