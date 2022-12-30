@extends('layouts.app')

@section('content')
    
    <img src="{{$trip->imgDestination}}" alt="Destination Image">
    <div class="imgDestination" >
        <h3>{{$trip->date}}</h3>
    </div>
    
    
        <ul class="tripDetails">
                <li>
                    <div class="originTrip">
                        <div class="departureTime">{{$trip->departureTime}}</div>
                        <div class="lineDiv" aria-hidden="true"></div>
                        <div class="origin">{{$trip->originAddress}}, CP: {{$trip->originPostcode}}. {{$trip->originCity}}-{{$trip->originCountry}}</div>
                    </div>
                </li>
                <li>
                    <div class="destinationTrip">
                        <div class="arrivalTime">{{$trip->arrivalTime}}</div>
                        <div aria-hidden="true"></div>
                        <div class="destination">{{$trip->destinationAddress}}, CP: {{$trip->destinationPostcode}}. {{$trip->destinationCity}}-{{$trip->destinationCountry}}</div>
                    </div>
                </li>
        </ul>
        <h3 class="priceTrip"> Cost per passenger: {{$trip->price}}€</h3>
        <div class="summaryTrip">
            <h3>Seats available: {{$trip->seats}}</h3>
            <h3>Driver's name: {{$trip->driverName}}</h3>
            <h3>Number phone: {{$trip->driverPhone}}</h3>
            <img class="imgDriver" src="{{$trip->driverImg}}" alt="Driver Image">
        </div>

            <h3 class="preferences"> Preferences: <br> {{$trip->preferences}}</h3>
            
            <div class="vehicleDetails">
                <h2>Vehicle details</h2>
                <h3>Vehicle energy type: {{$trip->energyType}}</h3>
                <h3>Vehicle numberplate: {{$trip->numberplate}}</h3>
                <h3>Vehicle type: {{$trip->vehicleType}}</h3>
            </div>
            
        
        <a href="{{route ('home')}}">↩</a>
    
    
@endsection