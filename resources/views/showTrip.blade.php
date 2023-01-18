@extends('layouts.app')

@section('content')
    
<section class="showPage">
    <img class="imgDestinationShow" src="{{$trip->imgDestination}}" alt="Destination Image">
    <div class="boxDestinationShow">
        <h4 class=dateShow >{{$trip->date}}</h4>
    </div><br>
    
    <div class="tripDetailsShow">
        <div class="timeDetailsShow">
            <div class="departureTimeShow">{{$trip->departureTime}}</div>
            <div class="arrivalTimeShow">{{$trip->arrivalTime}}</div>
        </div>
        <div class="imgLeafLineShow1">
            <img src="../images/leafLine.png" alt="Leaf line" class=imgLeafLineShow2>
        </div>
        <div class="addressDetailsShow">
            <div class="originShow">{{$trip->originAddress}}, {{$trip->originPostcode}}. {{$trip->originCity}}-{{$trip->originCountry}}<br></div>
            <div class="destinationShow">{{$trip->destinationAddress}}, {{$trip->destinationPostcode}}. {{$trip->destinationCity}}-{{$trip->destinationCountry}}</div>
        </div>
    </div>

    <div class="detailsContainerShow">
        <div class="costDetailsShow">
            <h4 class="costDetailsTitleShow"> Cost per passenger: <br><br>
                <p class="priceShow">{{$trip->price}}€</p>
            </h4>
        </div>
        <div class="seatsDetailsShow">
            <h4 class="seatsDetailsTitleShow"> Seats available:<br><br><br>
                <p class="seatsShow">{{$trip->seats}}</p>
            </h4>
        </div>
    </div>

    <div class="driverDetailsShow">
        <img class="imgDriverShow" src="{{$trip->driverImg}}" alt="Driver Image">
        <h4 class="driverNameTitleShow">Driver's name:<br><br>
            <p class="driverNameShow">{{$trip->driverName}} {{$trip->driverSurname}}
        </h4> 
        <h4 class="driverNumberTitleShow">Number phone:<br><br> 
            <p class="driverNumberShow">{{$trip->driverPhone}}
        </h4> 
    </div>

    <div class="preferencesShow"> 
        <h4 class="preferencesTitleShow">Preferences:</h4>
        <p class="descriptionPreferencesShow">{{$trip->preferences}}</p> 
    </div> 

    <div class="vehicleDetailsShow">
        <h4 class="energyTitleShow">Energy type:<br><br> 
            <p class="energyTypeShow"> {{$trip->energyType}}</p>
        </h4>
        <h4 class="numberplateTitleShow">Numberplate:<br><br> 
            <p class="numberplateShow">{{$trip->numberplate}}</p>
        </h4>
        <h4 class="vehicleTitleShow">Vehicle type:<br><br> 
            <p class="vehicleTypeShow">{{$trip->vehicleType}}</p>
        </h4>
    </div>
            
    <button type="button" class=buttonReserveShow><a href="{{route ('booking', $trip->id)}}" class=buttonReserveShow>Reserve my seat</a></button>
    <button class="buttonReserveShow" id="bookBtn"><a href="{{route('unbooking',$trip->id)}}">Unbooking</a></button>

</section>
@endsection