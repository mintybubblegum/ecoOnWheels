@extends('layouts.app')

@section('title','EcoOnWheels')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($sliders as $key => $item)
            <div class="carousel-item {{ $key == 0 ? ' active' : ''}}">
                @if ($item->imgDestination)
                <img src="{{ asset("$item->imgDestination") }}" class="d-block w-100" alt="City destination picture">
                @endif
                <div class="carousel-caption d-none d-md-block">
                <h5>{{$item->originCity}}->{{$item->destinationCity}}</h5>
                <p>{{$item->date}}</p>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> 

<!-- <div>
    @if (Auth::check() && Auth::user()->isAdmin)
        <button class="buttonHome" style="color: white">
        <a href="{{route('createTrip')}}">Create New Trip</a>
        </button>
    @endif
</div> -->

<div class="list" >
    @foreach ($trips as $trip)
    <section class="cardHome">
        <div class="card-body" >
            <a href="{{route ('showTrip', $trip->id)}}">
            <img src="{{ $trip->imgDestination }}" class="imgCityDestination img-fluid h-100" alt="..."></a>
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
                        <img src="../images/editPencil.png" alt="Pencil button">
                    </a>
                    <button type="submit" onclick="return confirm ('Are you sure you want to delete this trip to {{ $trip->destinationCity }}?')" class="deleteButton"><img src="../images/deleteBin.png" alt="Bin button"></button>
                </div>
                @endif 
                <div class="bookingButtons">
                    <button class="buttonHome" id="booking"><a href="{{route('booking',$trip->id)}}">Booking</a></button>
                    <button class="buttonHome" id="unbooking"><a href="{{route('unbooking',$trip->id)}}">Unbooking</a></button>
                </div>  
            </form>  
    </section>
    
    @endforeach
</div>
<div>
    {!! $trips->links()!!}
</div>

@endsection
