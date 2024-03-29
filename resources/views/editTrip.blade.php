@extends('layouts.app')

@section('title','EcoOnWheels')

@section('content')
    <div class="containerTitle">
        <h2 class="editTitle">Edit Trip</h2>
    </div>
    <form action="{{route ('updateTrip',$trip->id)}}" method="post">
        @method('PATCH')
        @csrf
        <h3 class="topTitle">Origin details</h3>
        <div>
            <label class="form-label">Origin Address</label>
            <input value="{{$trip->originAddress}}" type="text" class="formControl" name="originAddress">
        </div>
        <div>
            <label class="form-label">Postcode</label>
            <input value="{{$trip->originPostcode}}" type="text" class="formControl" name="originPostcode">
        </div>
        <div>
            <label class="form-label">City</label>
            <input value="{{$trip->originCity}}" type="text" class="formControl" name="originCity">
        </div>
        <div>
            <label class="form-label">Country</label>
            <input value="{{$trip->originCountry}}" type="text" class="formControl" name="originCountry">
        </div>
        <div>
            <label class="form-label">Date</label>
            <input value="{{$trip->date}}" type="date" class="formControl" name="date">
        </div>
        <div>
            <label class="form-label">Departure Time</label>
            <input value="{{$trip->departureTime}}" type="time" class="formControl" name="departureTime">
        </div>
        <h3>Destination details</h3>
        <div>
            <label class="form-label">Destination Image</label>
            <input value="{{$trip->imgDestination}}" type="text" class="formControl"  name="imgDestination">
        </div>
        <div>
            <label class="form-label">Destination Address</label>
            <input value="{{$trip->destinationAddress}}" type="text" class="formControl" name="destinationAddress">
        </div>
        <div>
            <label class="form-label">Postcode</label>
            <input value="{{$trip->destinationPostcode}}" type="text" class="formControl" name="destinationPostcode">
        </div>
        <div>
            <label class="form-label">City</label>
            <input value="{{$trip->destinationCity}}" type="text" class="formControl" name="destinationCity">
        </div>
        <div>
            <label class="form-label">Country</label>
            <input value="{{$trip->destinationCountry}}" type="text" class="formControl" name="destinationCountry">
        </div>
        <div>
            <label class="form-label">Arrival Time</label>
            <input value="{{$trip->arrivalTime}}" type="time" class="formControl" name="arrivalTime">
        </div>
        <div>
            <label class="form-label">Preferences</label>
            <textarea type="text" class="formControlTextarea" name="preferences">
                {{$trip->preferences}}
            </textarea>
        </div>
        <div>
            <label class="form-label">Seats</label>
            <input value="{{$trip->seats}}" type="number" class="formControl" name="seats">
        </div>
        <div>
            <label class="form-label">Price</label>
            <input value="{{$trip->price}}" type="number" step=0.01 class="formControl" name="price">
        </div>
        <h3>Driver data</h3>
        <div>
            <label class="form-label">Driver's name</label>
            <input value="{{$trip->driverName}}" type="text" class="formControl" name="driverName">
        </div>
        <div>
            <label class="form-label">Driver's surname</label>
            <input value="{{$trip->driverSurname}}" type="text" class="formControl" name="driverSurname">
        </div>
        <div>
            <label class="form-label">Driver's number phone</label>
            <input value="{{$trip->driverPhone}}" type="text" class="formControl" name="driverPhone">
        </div>
        <div>
            <label class="form-label">Driver's Image</label>
            <input value="{{$trip->driverImg}}" type="text" class="formControl"  name="driverImg">
        </div>
        <h3>Vehicle data</h3>
        <div>
            <label class="form-label">Energy type</label>
            <input value="{{$trip->energyType}}" type="text" class="formControl" name="energyType">
        </div>
        <div>
            <label class="form-label">Vehicle numberplate</label>
            <input value="{{$trip->numberplate}}" type="text" class="formControl" name="numberplate">
        </div>
        <div>
            <label class="form-label">Vehicle type</label>
            <input value="{{$trip->vehicleType}}" type="text" class="formControl" name="vehicleType">
        </div>
        <h3>Others details</h3>
        <div>
            <label class="form-label">Top Journeys</label>
            <input value="{{$trip->topJourneys}}" type="text" class="formControl" name="topJourneys">
        </div>
        <div class="buttons">
            <button type="reset" value="reset" class="btn resetButton">Reset</button>
            <a href="{{route('home')}}"><button type ="submit" value="update" class="btn createButton">Save</button></a>
        </div>
    </form>
    
@endsection