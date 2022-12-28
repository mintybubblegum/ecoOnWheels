@extends('layouts.app')

@section('content')

    <div>
        <img src="{{$trip->imgDestination}}" alt="Destination Image">
        <div>
            <div></div>
            <h2>Trip Details</h2>
            <h3>Origin Address: {{$trip->originAddress}}</h3>
            <h3>Origin CP: {{$trip->originPostcode}}</h3>
            <h3>Origin city: {{$trip->originCity}}</h3>
            <h3>Origin country: {{$trip->originCountry}}</h3>
            <h3>Destination address: {{$trip->destinationAddress}}</h3>
            <h3>Destination CP: {{$trip->destinationPostcode}}</h3>
            <h3>Destination city: {{$trip->destinationCity}}</h3>
            <h3>Destination country: {{$trip->destinationCountry}}</h3>
            <h3>Preferences: {{$trip->preferences}}</h3>
            <h3>Seats: {{$trip->seats}}</h3>
            <h3>Price: {{$trip->price}}</h3>
            <h2>Driver details</h2>
            <h3>Driver's name: {{$trip->driverName}}</h3>
            <h3>Driver's surname: {{$trip->driverSurname}}</h3>
            <h3>Driver's number phone: {{$trip->driverPhone}}</h3>
            <img src="{{$trip->driverImg}}" alt="Driver Image">
            <h2>Vehicle details</h2>
            <h3>Vehicle energy type: {{$trip->energyType}}</h3>
            <h3>Vehicle numberplate: {{$trip->numberplate}}</h3>
            <h3>Vehicle type: {{$trip->vehicleType}}</h3>
            <h3>{{$trip->date}}</h3>
            <h3>{{$trip->departureTime}}</h3>
            <h3>{{$trip->arrivalTime}}</h3>
        </div>
        <a href="{{route ('home')}}">↩</a>
    </div>
    
@endsection