@extends('layouts.app')

@section('content')

    <div>
        <img src="{{$trip->imgDestination}}" alt="Destination Image">
        <div>
            <h2>{{$trip->originAddress}}</h2>
            <h2>{{$trip->originPostcode}}</h2>
            <h2>{{$trip->originCity}}</h2>
            <h2>{{$trip->originCountry}}</h2>
            <h2>{{$trip->destinationAddress}}</h2>
            <h2>{{$trip->destinationPostcode}}</h2>
            <h2>{{$trip->destinationCity}}</h2>
            <h2>{{$trip->destinationCountry}}</h2>
            <h2>{{$trip->preferences}}</h2>
            <h2>{{$trip->seats}}</h2>
            <h2>{{$trip->price}}</h2>
            <h2>{{$trip->driverName}}</h2>
            <h2>{{$trip->driverSurname}}</h2>
            <h2>{{$trip->driverPhone}}</h2>
            <img src="{{$trip->driverImg}}" alt="Driver Image">
            <h2>{{$trip->energyType}}</h2>
            <h2>{{$trip->numberplate}}</h2>
            <h2>{{$trip->vehicleType}}</h2>
            <h2>{{$trip->date}}</h2>
            <h2>{{$trip->departureTime}}</h2>
            <h2>{{$trip->arrivalTime}}</h2>
        </div>
        <a href="{{route ('home')}}">↩</a>
    </div>
    
@endsection