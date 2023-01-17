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
            <input type="text" class="formControlTextarea" name="originAddress" value="{{old('originAddress')}}">
            @error('originAddress')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Postcode</label>
            <input type="text" class="formControl" name="originPostcode" value="{{old('originPostcode')}}">
            @error('originPostcode')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">City</label>
            <input type="text" class="formControl" name="originCity" value="{{old('originCity')}}">
            @error('originCity')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Country</label>
            <input type="text" class="formControl" name="originCountry" value="{{old('originCountry')}}">
            @error('originCountry')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Date</label>
            <input type="date" class="formControl" name="date" value="{{old('date')}}">
            @error('date')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Departure Time</label>
            <input type="time" class="formControl" name="departureTime" value="{{old('departureTime')}}">
            @error('departureTime')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <h3>Destination details</h3>
        <div>
            <label class="form-label">Destination Image</label>
            <input type="text" class="formControl"  name="imgDestination" value="{{old('imgDestination')}}">
            @error('imgDestination')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Destination Address</label>
            <input type="text" class="formControl" name="destinationAddress" value="{{old('destinationAddress')}}">
            @error('destinationAddress')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Postcode</label>
            <input type="text" class="formControl" name="destinationPostcode" value="{{old('destinationPostcode')}}">
            @error('destinationPostcode')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">City</label>
            <input type="text" class="formControl" name="destinationCity" value="{{old('destinationCity')}}">
            @error('destinationCity')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Country</label>
            <input type="text" class="formControl" name="destinationCountry" value="{{old('destinationCountry')}}">
            @error('destinationCountry')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Arrival Time</label>
            <input type="time" class="formControl" name="arrivalTime" value="{{old('arrivalTime')}}">
            @error('arrivalTime')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Preferences</label>
            <textarea class="formControl" area-label="With textarea" name="preferences">
                {{{Request::old('preferences')}}}    
            </textarea>
            @error('preferences')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Seats</label>
            <input type="number" class="formControl" name="seats" value="{{old('seats')}}">
            @error('seats')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Price</label>
            <input type="number" step=0.01 class="formControl" name="price" value="{{old('price')}}">
            @error('price')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <h3>Driver data</h3>
        <div>
            <label class="form-label">Driver's name</label>
            <input type="text" class="formControl" name="driverName" value="{{old('driverName')}}">
            @error('driverName')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Driver's surname</label>
            <input type="text" class="formControl" name="driverSurname" value="{{old('driverSurname')}}">
            @error('driverSurname')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Driver's number phone</label>
            <input type="text" class="formControl" name="driverPhone" value="{{old('driverPhone')}}">
            @error('driverPhone')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Driver Image</label>
            <input type="text" class="formControl"  name="driverImg" value="{{old('driverImg')}}">
            @error('driverImg')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <h3>Vehicle data</h3>
        <div>
            <label class="form-label">Energy type</label>
            <input type="text" class="formControl" name="energyType" value="{{old('energyType')}}">
            @error('energyType')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Vehicle numberplate</label>
            <input type="text" class="formControl" name="numberplate" value="{{old('numberplate')}}">
            @error('numberplate')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label class="form-label">Vehicle type</label>
            <input type="text" class="formControl" name="vehicleType" value="{{old('vehicleType')}}">
            @error('vehicleType')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <h3>Others details</h3>
        <div>
            <label class="form-label">Top Journeys</label>
            <input type="text" class="formControl" name="topJourneys" value="{{old('topJourneys')}}">
            @error('topJourneys')
                <p class="invalidFeedback">*{{$message}}</p>
            @enderror
        </div>
        <div class="buttons">
            <button type="reset" value="reset" class="btn resetButton">Reset</button>
            <a href="{{route('home')}}"><button type ="submit" value="create" class="btn createButton">Create</button></a>
        </div>
    </form>
    
@endsection