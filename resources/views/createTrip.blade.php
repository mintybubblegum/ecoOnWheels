@extends('layouts.app')

@section('content')

<div>
    <form class="row g-3" action="{{route ('storeTrip')}}" method="post">
        @csrf
        <div class="col-md-6">
            <label class="form-label">Destination Image</label>
            <input type="text" class="form-control"  name="imgDestination">
        </div>
        <div class="col-md-6">
            <label class="form-label">Origin Address</label>
            <input type="text" class="form-control" name="originAddress">
        </div>
        <div class="col-md-6">
            <label class="form-label">Origin Postcode</label>
            <input type="text" class="form-control" name="originPostcode">
        </div>
        <div class="col-md-6">
            <label class="form-label">Origin City</label>
            <input type="text" class="form-control" name="originCity">
        </div>
        <div class="col-md-6">
            <label class="form-label">Origin Country</label>
            <input type="text" class="form-control" name="originCountry">
        </div>
        <div class="col-md-6">
            <label class="form-label">Destination Address</label>
            <input type="text" class="form-control" name="destinationAddress">
        </div>
        <div class="col-md-6">
            <label class="form-label">Destination Postcode</label>
            <input type="text" class="form-control" name="destinationPostcode">
        </div>
        <div class="col-md-6">
            <label class="form-label">Destination City</label>
            <input type="text" class="form-control" name="destinationCity">
        </div>
        <div class="col-md-6">
            <label class="form-label">Destination Country</label>
            <input type="text" class="form-control" name="destinationCountry">
        </div>
        <div class="col-md-6">
            <label class="form-label">Preferences</label>
            <textarea class="form-control" name="preferences"></textarea>
        </div>
        <div class="col-md-6">
            <label class="form-label">Seats</label>
            <input type="number" class="form-control" name="seats">
        </div>
        <div class="col-md-6">
            <label class="form-label">Price</label>
            <input type="number" step=0.01 class="form-control" name="price">
        </div>
        <div class="col-md-6">
            <label class="form-label">Driver name</label>
            <input type="text" class="form-control" name="driverName">
        </div>
        <div class="col-md-6">
            <label class="form-label">Driver surname</label>
            <input type="text" class="form-control" name="driverSurname">
        </div>
        <div class="col-md-6">
            <label class="form-label">Driver number phone</label>
            <input type="text" class="form-control" name="driverPhone">
        </div>
        <div class="col-md-6">
            <label class="form-label">Driver Image</label>
            <input type="text" class="form-control"  name="driverImg">
        </div>
        <div class="col-md-6">
            <label class="form-label">Energy type</label>
            <input type="text" class="form-control" name="energyType">
        </div>
        <div class="col-md-6">
            <label class="form-label">Vehicle number plate</label>
            <input type="text" class="form-control" name="numberplate">
        </div>
        <div class="col-md-6">
            <label class="form-label">Vehicle type</label>
            <input type="text" class="form-control" name="vehicleType">
        </div>
        <div class="col-md-6">
            <label class="form-label">Date</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="col-md-6">
            <label class="form-label">Departure Time</label>
            <input type="time" class="form-control" name="departureTime">
        </div>
        <div class="col-md-6">
            <label class="form-label">Arrival Time</label>
            <input type="time" class="form-control" name="arrivalTime">
        </div>
        <div class="col-md-6">
            <label class="form-label">Top Journeys </label>
            <input type="text" class="form-control" name="topJourneys">
        </div>
        <div class="col-md-6">
            <label class="form-label">User email</label>
            <input type="text" class="form-control" name="userEmail">
        </div>
        <div class="buttons">
            <a href="{{route('home')}}"><button type ="submit" value="create" class="btn btn-primary">Create</button></a>
            <button type="reset" value="reset" class="btn btn-primary">Reset</button>
            <a href="{{route('home')}}"><button type="button" class="btn btn-primary">Return</button></a>
        </div>
    </form>
    </div>
@endsection