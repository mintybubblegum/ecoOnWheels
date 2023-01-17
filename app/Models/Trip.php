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
    ];
    
    public function user(){
        return $this->belongsToMany(User::class);	
    }


    static function ifBooked($trips, $myTripUser)
    {
        foreach ($trips as $trip) {
            foreach ($myTripUser as $myTrip){

                if ($trip->id === $myTrip->id){
                    $trip->ifBooked = "1";
                }
            }    
        }
        return ($trips);
    }

    static function totalUserBookings($trips)
    {
        $trips=Trip::withCount('user')->get();
        
        return ($trips);
    }

    static function checkTripAvailable($trip) {
        
        $usercount = Trip::totalUserBookings($trip);

        foreach ($usercount as $reservation) {

            if ($reservation->id === $trip->id) {                
                $usercount = $reservation->user_count;
                return $usercount;
            }
        }
    }

    static function checkBooking($user, $trip) {

        foreach ($user->trip as $bookedTrip) {

            if ($trip->id === $bookedTrip->id) {
                $booked = true;
                return $booked;
            }
        }
    }



}
