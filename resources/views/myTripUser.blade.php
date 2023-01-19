@extends('layouts.app')

@section('title','EcoOnWheels')

@section('content')

<div class="list" >
    @foreach ($trips as $trip)
        @if ($trip->date > now())
        <section class="cardHome">
            <div class="card-body" >
                <a href="{{route ('showTrip', $trip->id)}}">
                <img src="{{ $trip->imgDestination }}" class="imgCityDestination img-fluid h-100" alt="..."></a>
                <div class="leafLineHome">
                    <img src="./images/leafLine.png" alt="Leaf Line">
                </div>
                <h6 class="date"> {{ $trip->date }} </h6>
                <h6 class="departureTime"> {{ $trip->departureTime }} </h6>
                <h6 class="originCity"> {{ $trip->originCity }}</h6>
                <h6 class="arrivalTime"> {{ $trip->arrivalTime }}</h6>
                <h6 class="destinationCity"> {{ $trip->destinationCity }} </h6>
                <h6 class="price col-9"> {{ $trip->price }}€ </h6>
                <h6 class="energyType"> {{ $trip->energyType }} </h6>
            </div>
            
                <form class=formActionsHome action="{{ route('deleteTrip', ['id'=>$trip->id]) }}" method="POST">
                    @if (Auth::check() && Auth::user()->isAdmin)
                    @method('delete')
                    @csrf
                    <div class="adminButtons">
                        <a href="{{route ('editTrip',['id'=>$trip->id])}}">
                            <img src="../images/starEmpty.png" alt="star empty">
                            <img src="../images/editPencil.png" alt="Pencil button">
                        </a>
                        <button type="submit" onclick="return confirm ('Are you sure you want to delete this trip to {{ $trip->destinationCity }}?')" class="deleteButton"><img src="../images/deleteBin.png" alt="Bin button"></button>
                    </div>
                    @endif 
                    <div class="bookingButtons">
                        <button class="bookBtn" id="bookBtn"><a href="{{route('booking',$trip->id)}}">Booking</a></button>
                        <button class="bookBtn" id="bookBtn"><a href="{{route('unbooking',$trip->id)}}">Unbooking</a></button>
                    </div>  
                </form>  
        </section>
        @endif


        
        @if ($trip->date < now())
            <section class="cardHomePast">
                <div class="card-body" >
                    <a href="{{route ('showTrip', $trip->id)}}">
                    <img src="{{ $trip->imgDestination }}" class="imgCityDestination img-fluid h-100" alt="..."></a>
                    <div class="leafLineHome">
                        <img src="./images/leafLine.png" alt="Leaf Line">
                    </div>
                    <h6 class="date"> {{ $trip->date }} </h6>
                    <h6 class="departureTime"> {{ $trip->departureTime }} </h6>
                    <h6 class="originCity"> {{ $trip->originCity }}</h6>
                    <h6 class="arrivalTime"> {{ $trip->arrivalTime }}</h6>
                    <h6 class="destinationCity"> {{ $trip->destinationCity }} </h6>
                    <h6 class="price col-9"> {{ $trip->price }}€ </h6>
                    <h6 class="energyType"> {{ $trip->energyType }} </h6>
                </div>
                
                    <form class=formActionsHome action="{{ route('deleteTrip', ['id'=>$trip->id]) }}" method="POST">
                        @if (Auth::check() && Auth::user()->isAdmin)
                        @method('delete')
                        @csrf
                        <div class="adminButtons">
                            <button type="submit" onclick="return confirm ('Are you sure you want to delete this trip to {{ $trip->destinationCity }}?')" class="deleteButton"><img src="../images/deleteBin.png" alt="Bin button"></button>
                        </div>
                        @endif 
                    </form>  
            </section>
            @endif

    @endforeach
</div>
<div>
    {!! $trips->links()!!} 
</div>

@endsection