@extends('layouts.app')

@section('content')

<div>
    <form class="row g-3" action="{{route ('updateTrip',$trip->id)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="col-md-6">
            <label class="form-label">Destination Image</label>
            <input value="{{$trip->imgDestination}}" type="text" class="form-control"  name="imgDestination">
        </div>
        <div class="col-md-6">
            <label class="form-label">Origin Address</label>
            <input value="{{$trip->originAddress}}" type="text" class="form-control" name="originAddress">
        </div>
        <div class="col-md-6">
            <label class="form-label">Origin Postcode</label>
            <input value="{{$trip->originPostcode}}" type="text" class="form-control" name="originPostcode">
        </div>
        <div class="col-md-6">
            <label class="form-label">Origin City</label>
            <input value="{{$trip->originCity}}" type="text" class="form-control" name="originCity">
        </div>
        <div class="col-md-6">
            <label class="form-label">Origin Country</label>
            <input value="{{$trip->originCountry}}" type="text" class="form-control" name="originCountry">
        </div>
        <div class="col-md-6">
            <label class="form-label">Destination Address</label>
            <input value="{{$trip->destinationAddress}}" type="text" class="form-control" name="destinationAddress">
        </div>
        <div class="col-md-6">
            <label class="form-label">Destination Postcode</label>
            <input value="{{$trip->destinationPostcode}}" type="text" class="form-control" name="destinationPostcode">
        </div>
        <div class="col-md-6">
            <label class="form-label">Destination City</label>
            <input value="{{$trip->destinationCity}}" type="text" class="form-control" name="destinationCity">
        </div>
        <div class="col-md-6">
            <label class="form-label">Destination Country</label>
            <input value="{{$trip->destinationCountry}}" type="text" class="form-control" name="destinationCountry">
        </div>
        <div class="col-md-6">
            <label class="form-label">Preferences</label>
            <textarea value="{{$trip->preferences}}" class="form-control" name="preferences"></textarea>
        </div>
        <div class="col-md-6">
            <label class="form-label">Seats</label>
            <input value="{{$trip->seats}}" type="number" class="form-control" name="seats">
        </div>
        <div class="col-md-6">
            <label class="form-label">Price</label>
            <input value="{{$trip->price}}" type="number" step=0.01 class="form-control" name="price">
        </div>
        <div class="col-md-6">
            <label class="form-label">Driver name</label>
            <input value="{{$trip->driverName}}" type="text" class="form-control" name="driverName">
        </div>
        <div class="col-md-6">
            <label class="form-label">Driver surname</label>
            <input value="{{$trip->driverSurname}}" type="text" class="form-control" name="driverSurname">
        </div>
        <div class="col-md-6">
            <label class="form-label">Driver number phone</label>
            <input value="{{$trip->driverPhone}}" type="text" class="form-control" name="driverPhone">
        </div>
        <div class="col-md-6">
            <label class="form-label">Driver Image</label>
            <input value="{{$trip->driverImg}}" type="text" class="form-control"  name="driverImg">
        </div>
        <div class="col-md-6">
            <label class="form-label">Energy type</label>
            <input value="{{$trip->energyType}}" type="text" class="form-control" name="energyType">
        </div>
        <div class="col-md-6">
            <label class="form-label">Vehicle number plate</label>
            <input value="{{$trip->numberplate}}" type="text" class="form-control" name="numberplate">
        </div>
        <div class="col-md-6">
            <label class="form-label">Vehicle type</label>
            <input value="{{$trip->vehicleType}}" type="text" class="form-control" name="vehicleType">
        </div>
        <div class="col-md-6">
            <label class="form-label">Date</label>
            <input value="{{$trip->date}}" type="date" class="form-control" name="date">
        </div>
        <div class="col-md-6">
            <label class="form-label">Departure Time</label>
            <input value="{{$trip->departureTime}}" type="time" class="form-control" name="departureTime">
        </div>
        <div class="col-md-6">
            <label class="form-label">Arrival Time</label>
            <input value="{{$trip->arrivalTime}}" type="time" class="form-control" name="arrivalTime">
        </div>
        <div class="col-md-6">
            <label class="form-label">Top Journeys </label>
            <input value="{{$trip->topJourneys}}" type="text" class="form-control" name="topJourneys">
        </div>
        <div class="col-md-6">
            <label class="form-label">User email</label>
            <input value="{{$trip->userEmail}}" type="text" class="form-control" name="userEmail">
        </div>
        <div class="buttons">
            <a href="{{route('home')}}"><button type ="submit" value="update" class="btn btn-primary">Save</button></a>
            <button type="reset" value="reset" class="btn btn-primary">Reset</button>
            <a href="{{route('home')}}"><button type="button" class="btn btn-primary">Return</button></a>
        </div>
    </form>
    </div>
@endsection