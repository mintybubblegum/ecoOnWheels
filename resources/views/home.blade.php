@extends('layouts.app')

@section('content')

<div>
    @if (Auth::check() && Auth::user()->isAdmin)
        <button class="btn btn-primary" style="color: white">
        <a href="{{route('createTrip')}}">Create New Trip</a>
        </button>
    @endif
</div>

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
            <h6 class="price col-9"> {{ $trip->price }} € </h6>
            <h6 class="energyType"> {{ $trip->energyType }} </h6>
        </div>
        @if (Auth::check() && Auth::user()->isAdmin)
            <form class=formActions action="{{ route('deleteTrip', ['id'=>$trip->id]) }}" method="POST">
                @method('delete')
                @csrf
                <a href="{{route ('editTrip',['id'=>$trip->id])}}">
                    <button type="button" class=buttonHome>Edit</button>
                </a>
                <button type="submit" onclick="return confirm ('Are you sure you want to delete this trip to {{ $trip->destinationCity }}?')" class=buttonHome>Delete</button>
            </form>  
        @endif              
    </section>
    @endforeach
</div>
<div>
    {!! $trips->links()!!}
</div>

@endsection
