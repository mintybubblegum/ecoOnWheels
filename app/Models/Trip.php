<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'imgDestination',
        'originAddress',
        'originPostcode',
        'originCity',
        'originCountry',
        'destinationAddress',
        'destinationPostcode',
        'destinationCity',
        'destinationCountry',
        'preferences',
        'seats',
        'price',
        'driverName',
        'driverSurname',
        'driverImg',
        'energyType',
        'vehicleType',
        'date',
        'departureTime',
        'arrivalTime',
        'topJourneys',
];

}
