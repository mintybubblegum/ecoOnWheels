@extends('layouts.app')

@section('content')
    
    <img src="{{$trip->imgDestination}}" alt="Destination Image">
    <div class="imgDestination" >
        <h3>{{$trip->date}}</h3>
    </div>
    <br>
    
    <h2>Trip details</h2>
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
        <div class="seatsDetailsContainer">
            <h3 class="seatsDetails"> Cost per passenger: {{$trip->price}}€</h3>
            <h3 class="seatsDetails"> Seats available: {{$trip->seats}}</h3>  
        </div>
        
        <h2>Driver details</h2>
        <div class="driverDetails">
            <h4>Driver's name:  <br>{{$trip->driverName}}</h4> 
            <h4>Number phone: <br>{{$trip->driverPhone}}</h4> 
            <img class="imgDriver" src="{{$trip->driverImg}}" alt="Driver Image">
        </div>

            <div class="preferences"> 
                <h4>Preferences:</h4>
                <p>{{$trip->preferences}}</p> 
            </div> 
            <h2>Vehicle details</h2>
            <div class="vehicleDetails">
                <h3>Energy type: </h3>
                <h4> {{$trip->energyType}}</h4>
                <h3>Numberplate: </h3>
                <h4>{{$trip->numberplate}}</h4>
                <h3>Vehicle type: </h3>
                <h4>{{$trip->vehicleType}}</h4>
            </div>
            
        
        <a href="{{route ('home')}}">
            <button type="button" class=buttonHome>Home</button>
        </a>
    
    
@endsection