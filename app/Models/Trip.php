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
        'driverPhone',
        'driverImg',
        'energyType',
        'numberplate',
        'vehicleType',
        'date',
        'departureTime',
        'arrivalTime',
        'topJourneys',
    ];
    
    public function user(){ 
        return $this->belongsToMany(User::class);	
    }
}
