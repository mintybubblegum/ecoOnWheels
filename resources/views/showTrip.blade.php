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
            <div class="origin">{{$trip->originAddress}}, {{$trip->originPostcode}}. {{$trip->originCity}}-{{$trip->originCountry}}<br></div>
            <div class="destination">{{$trip->destinationAddress}}, {{$trip->destinationPostcode}}. {{$trip->destinationCity}}-{{$trip->destinationCountry}}</div>
        </div>
    </div>
        <div class="detailsContainer">
            <div class="costDetails">
            <h4 class="costDetailsTitle"> Cost per passenger: <br><br>
                <p class="priceShow">{{$trip->price}}€</p>
                </h4>
            </div>
            <div class="seatsDetails">
            <h4 class="seatsDetailsTitle"> Seats available:<br><br><br>
                <p class="seatsShow">{{$trip->seats}}</p>
                </h4>
            </div>
        </div>
        <div class="driverDetails">
        <img class="imgDriver" src="{{$trip->driverImg}}" alt="Driver Image">
            <h4 class="driverNameTitle">Driver's name:<br><br>
            <p class="driverName">{{$trip->driverName}} {{$trip->driverSurname}}
            </h4> 
            <h4 class="driverNumberTitle">Number phone:<br><br> 
            <p class="driverNumber">{{$trip->driverPhone}}
            </h4> 
        </div>
            <div class="preferences"> 
                <h4 class="preferencesTitle">Preferences:</h4>
                <p class="descriptionPreferences">{{$trip->preferences}}</p> 
            </div> 
            <div class="vehicleDetails">
                <h4 class="energyTitle">Energy type:<br><br> 
                <p class="energyType"> {{$trip->energyType}}</p>
                </h4>
                <h4 class="numberplateTitle">Numberplate:<br><br> 
                <p class="numberplate">{{$trip->numberplate}}</p>
                </h4>
                <h4 class="vehicleTitle">Vehicle type:<br><br> 
                <p class="vehicleType">{{$trip->vehicleType}}</p>
                </h4>
            </div>
            
        
        <a href="{{route ('home')}}">
            <button type="button" class=buttonHome>Home</button>
        </a>
    
@endsection