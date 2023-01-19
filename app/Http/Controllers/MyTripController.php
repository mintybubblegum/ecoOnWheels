<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MyTripController extends Controller
{
    //
    public function index()
    {
        /* $trips = Trip::all()
            ->sortBy('date');

        $myeventuser = [];    
        if (Auth::user()){
            $user=Auth::user();
            $mytripuser = $user->trip;
        } */
        return 'mytrips';
    }
}
