@extends('layouts.app')

@section('content')
    
    <img src="{{$trip->imgDestination}}" alt="Destination Image">
    <div class="imgDestination" >
        <h3>{{$trip->date}}</h3>
    </div>
    
    <div class="tripDetails">
        <div class="timeDetails">
            <div class="departureTime">{{$trip->departureTime}}</div>
            <div class="arrivalTime">{{$trip->arrivalTime}}</div>
        </div>
        <div class="imgLeafLine">
            <img src="../images/leafLine.png" alt="Leaf line">
        </div>
        <div class="addressDetails">
            <div class="origin">{{$trip->originAddress}}, CP: {{$trip->originPostcode}}. {{$trip->originCity}}-{{$trip->originCountry}}</div>
            <div class="destination">{{$trip->destinationAddress}}, CP: {{$trip->destinationPostcode}}. {{$trip->destinationCity}}-{{$trip->destinationCountry}}</div>
        </div>
    </div>
    
        <h3 class="priceTrip"> Cost per passenger: {{$trip->price}}€</h3>
        <div class="summaryTrip">
            <h3>Seats available: {{$trip->seats}}</h3>
            <h3>Driver's name: {{$trip->driverName}}</h3>
            <h3>Number phone: {{$trip->driverPhone}}</h3>
            <img class="imgDriver" src="{{$trip->driverImg}}" alt="Driver Image">
        </div>

            <h3 class="preferences"> Preferences: <div>{{$trip->preferences}}</div> </h3>
            <h2>Vehicle details</h2>
            <div class="vehicleDetails">
                <h3>Energy type: {{$trip->energyType}}</h3>
                <h3>Numberplate: {{$trip->numberplate}}</h3>
                <h3>Vehicle type: {{$trip->vehicleType}}</h3>
            </div>
            
        
        <a href="{{route ('home')}}">↩</a>
    
    
@endsection