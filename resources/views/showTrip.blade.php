@extends('layouts.app')

@section('content')
    
    <img class="imgDestinationShow" src="{{$trip->imgDestination}}" alt="Destination Image">
    <div class="boxDestinationShow" >
        <h3 class=dateShow >{{$trip->date}}</h3>
    </div>
    <br>
    
    <div class="tripDetailsShow">
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
        <div class="detailsContainer">
            <h4 class="costDetails"> Cost per passenger: <br><br>
                <p class="priceShow">{{$trip->price}}€</p>
            </h4>
            <h4 class="seatsDetails"> Seats available:<br><br><br>
                <p class="seatsShow">{{$trip->seats}}</p>
                </h4>  
        </div>
        <div class="driverDetails">
            <h4 class="driverNameTitle">Driver's name:  <br>
            <p class="driverName">{{$trip->driverName}}
            </h4> 
            <h4 class="driverNumberTitle">Number phone: <br>
            <p class="driverNumber">{{$trip->driverPhone}}
        </h4> 
            <!-- <img class="imgDriver" src="{{$trip->driverImg}}" alt="Driver Image"> -->
            <img class="imgDriver" src="{{ asset('./public/images/driver1.jpg') }}" alt="Driver Image">
        </div>
            <div class="preferences"> 
                <h4>Preferences:</h4>
                <p>{{$trip->preferences}}</p> 
            </div> 
            <div class="vehicleDetails">
                <h4>Energy type: </h3>
                <p> {{$trip->energyType}}</p>
                <h4>Numberplate: </h4>
                <p>{{$trip->numberplate}}</p>
                <h4>Vehicle type: </h4>
                <p>{{$trip->vehicleType}}</p>
            </div>
            
        
        <a href="{{route ('home')}}">
            <button type="button" class=buttonHome>Home</button>
        </a>
    
@endsection