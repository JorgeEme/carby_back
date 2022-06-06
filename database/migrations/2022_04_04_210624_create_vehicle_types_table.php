<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->double('price_by_minute');
            $table->integer('seats');
            $table->integer('doors')->nullable();
            $table->double('automony_km');
            $table->integer('horse_power');
            $table->string('gear');
            $table->boolean('air_conditioning');
            $table->boolean('spare_wheel');
            $table->boolean('smart_screen');
            $table->boolean('back_cam');
            $table->boolean('parking_sensor');
            $table->boolean('auto_emergency_braking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_types');
    }
}
