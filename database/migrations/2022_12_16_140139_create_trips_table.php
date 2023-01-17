<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();

            $table->string('imgDestination')->nullable();
            $table->string('originAddress');
            $table->string('originPostcode');
            $table->string('originCity');
            $table->string('originCountry');
            $table->string('destinationAddress');
            $table->string('destinationPostcode');
            $table->string('destinationCity');
            $table->string('destinationCountry');
            $table->string('preferences');
            $table->integer('seats');
            $table->float('price');
            $table->string('driverName');
            $table->string('driverSurname');
            $table->string('driverPhone');
            $table->string('driverImg')->nullable();
            $table->string('energyType');
            $table->string('numberplate');
            $table->string('vehicleType');
            $table->date('date');
            $table->time('departureTime');
            $table->time('arrivalTime');
            $table->boolean('topJourneys')->nullable()->default(0);
            $table->boolean('ifBooked')->nullable();
            $table->integer('totalBookingList')->default(0);
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
        Schema::dropIfExists('trips');
    }
};
