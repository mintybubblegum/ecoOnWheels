@extends('layouts.app')

@section('content')
    <div class="containerTitle">
        <h2 class="createTitle">Create Trip</h2>
    </div>
    
    <form action="{{route ('storeTrip')}}" method="post">
        @csrf
        <h3 class="topTitle">Origin details</h3>
        <div>
            <label class="form-label">Origin Address</label>
            <input type="text" class="formControl" name="originAddress">
        </div>
        <div>
            <label class="form-label">Postcode</label>
            <input type="text" class="formControl" name="originPostcode">
        </div>
        <div>
            <label class="form-label">City</label>
            <input type="text" class="formControl" name="originCity">
        </div>
        <div>
            <label class="form-label">Country</label>
            <input type="text" class="formControl" name="originCountry">
        </div>
        <div>
            <label class="form-label">Date</label>
            <input type="date" class="formControl" name="date">
        </div>
        <div>
            <label class="form-label">Departure Time</label>
            <input type="time" class="formControl" name="departureTime">
        </div>
        <h3>Destination details</h3>
        <div>
            <label class="form-label">Destination Image</label>
            <input type="text" class="formControl"  name="imgDestination">
        </div>
        <div>
            <label class="form-label">Destination Address</label>
            <input type="text" class="formControl" name="destinationAddress">
        </div>
        <div>
            <label class="form-label">Postcode</label>
            <input type="text" class="formControl" name="destinationPostcode">
        </div>
        <div>
            <label class="form-label">City</label>
            <input type="text" class="formControl" name="destinationCity">
        </div>
        <div>
            <label class="form-label">Country</label>
            <input type="text" class="formControl" name="destinationCountry">
        </div>
        <div>
            <label class="form-label">Arrival Time</label>
            <input type="time" class="formControl" name="arrivalTime">
        </div>
        <div>
            <label class="form-label">Preferences</label>
            <textarea class="formControl" name="preferences"></textarea>
        </div>
        <div>
            <label class="form-label">Seats</label>
            <input type="number" class="formControl" name="seats">
        </div>
        <div>
            <label class="form-label">Price</label>
            <input type="number" step=0.01 class="formControl" name="price">
        </div>
        <h3>Driver data</h3>
        <div>
            <label class="form-label">Driver's name</label>
            <input type="text" class="formControl" name="driverName">
        </div>
        <div>
            <label class="form-label">Driver's surname</label>
            <input type="text" class="formControl" name="driverSurname">
        </div>
        <div>
            <label class="form-label">Driver's number phone</label>
            <input type="text" class="formControl" name="driverPhone">
        </div>
        <div>
            <label class="form-label">Driver Image</label>
            <input type="text" class="formControl"  name="driverImg">
        </div>
        <h3>Vehicle data</h3>
        <div>
            <label class="form-label">Energy type</label>
            <input type="text" class="formControl" name="energyType">
        </div>
        <div>
            <label class="form-label">Vehicle numberplate</label>
            <input type="text" class="formControl" name="numberplate">
        </div>
        <div>
            <label class="form-label">Vehicle type</label>
            <input type="text" class="formControl" name="vehicleType">
        </div>
        <h3>Others details</h3>
        <div>
            <label class="form-label">User email</label>
            <input style="margin-bottom: 15px" type="text" class="formControl" name="userEmail">
        </div>
    </form>

    <div class="buttons">
        <button type="reset" value="reset" class="btn resetButton">Reset</button>
        <a href="{{route('home')}}"><button type ="submit" value="create" class="btn createButton">Create</button></a>
    </div>

    
@endsection