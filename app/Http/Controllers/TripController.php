<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sliders= Trip::where('topJourneys','1')->get();

        $trips= Trip::Paginate(5);

        return view('home', compact('sliders') ,compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createTrip');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imgDestination' => 'nullable',
            'originAddress' => 'required',
            'originPostcode' => 'required',
            'originCity' => 'required',
            'originCountry' => 'required',
            'destinationAddress' => 'required',
            'destinationPostcode' => 'required',
            'destinationCity' => 'required',
            'destinationCountry' => 'required',
            'preferences' => 'required',
            'seats' => 'required | numeric',
            'price' => 'required | numeric',
            'driverName' => 'required',
            'driverSurname' => 'required',
            'driverPhone' => 'required',
            'driverImg' => 'nullable',
            'energyType' => 'required',
            'numberplate' => 'required',
            'vehicleType' => 'required',
            'date' => 'required | date',
            'departureTime' => 'required',
            'arrivalTime' => 'required',
            'topJourneys' => 'nullable',
        ]);
        
        $trip = new Trip;
        $trip->imgDestination = $request->imgDestination;
        $trip->originAddress = $request->originAddress;
        $trip->originPostcode = $request->originPostcode;
        $trip->originCity = $request->originCity;
        $trip->originCountry = $request->originCountry;
        $trip->destinationAddress = $request->destinationAddress;
        $trip->destinationPostcode = $request->destinationPostcode;
        $trip->destinationCity = $request->destinationCity;
        $trip->destinationCountry = $request->destinationCountry;
        $trip->preferences = $request->preferences;
        $trip->seats = $request->seats;
        $trip->price = $request->price;
        $trip->driverName = $request->driverName;
        $trip->driverSurname = $request->driverSurname;
        $trip->driverPhone = $request->driverPhone;
        $trip->driverImg = $request->driverImg;
        $trip->energyType = $request->energyType;
        $trip->numberplate = $request->numberplate;
        $trip->vehicleType = $request->vehicleType;
        $trip->date = $request->date;
        $trip->departureTime = $request->departureTime;
        $trip->arrivalTime = $request->arrivalTime;
        $trip->topJourneys = $request->topJourneys;

        $trip->save();

        /* $trip = request()->except('_token'); */
        /* Trip::create($trip); */

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trip=Trip::find($id);
        return view('showTrip', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trip=Trip::find($id);
        return view('editTrip', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trip=request()->except('_token','_method');
        Trip::where('id', $id)->update($trip);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trip::destroy($id);
        return redirect()->route('home');
    }
    public function booking($id){

        $trip = Trip::find($id);
        $user = User::find(Auth::id());

        $user->trip()->attach($trip);

        return redirect()->route('home');
    }

    public function unbooking($id){

        $trip = Trip::find($id);
        $user = User::find(auth::id());

        $user->trip()->detach($trip);

        return redirect()->route('home');
    }
}
