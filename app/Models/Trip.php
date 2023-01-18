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
        'ifBooked',
        'totalBookings'
    ];
    
    public function user(){ 
        return $this->belongsToMany(User::class);	
    }

    static function ifBook($trips, $mytripuser)
    {
        foreach ($trips as $trip) {
            foreach ($mytripuser as $mytrip){

                if ($trip->id === $mytrip->id){
                    $trip->ifBooked = "1";
                }
            }    
        }
        return ($trips);
    }

    static function totaluserBookings($trips)
    {
        $trips=Trip::withCount('user')->get();
        
        return ($trips);
    }

    static function checkSeatsFree($trip) {

        $usercount = Trip::totaluserBookings($trip);

        foreach ($usercount as $item) {

            if ($item->id === $trip->id) {                
                $usercount = $item->user_count;
                return $usercount;
            }
        }
    }

    static function checkBookings($user, $trip) {

        foreach ($user->trip as $bookedTrip) {

            if ($trip->id === $bookedTrip->id) {
                $booked = true;
                return $booked;
            }
        }
    }
}