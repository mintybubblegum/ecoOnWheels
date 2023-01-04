@extends('layouts.app')

@section('content')

<div>
    <button class="btn btn-primary" style="color: white">
        <a href="{{route('createTrip')}}">Create New Trip</a>
    </button>
</div>

<div class="list" >
    @foreach ($trips as $trip)
    <section class="cardHome">
        <div class="card-body" >
            <a href="{{route ('showTrip', $trip->id)}}">
            <img src="{{ $trip->imgDestination }}" class="imgDestination img-fluid h-100" alt="..."></a>
            <h5 class="date"> {{ $trip->date }} </h5>
            <h5 class="departureTime"> {{ $trip->departureTime }} </h5>
            <h5 class="originCity"> {{ $trip->originCity }}</h5>
            <h5 class="arrivalTime"> {{ $trip->arrivalTime }}</h5>
            <h5 class="destinationCity"> {{ $trip->destinationCity }} </h5>
            <h5 class="price col-9"> {{ $trip->price }} € </h5>
            <h5 class="energyType"> {{ $trip->energyType }} </h5>
        </div>
                <form class=formActions action="{{ route('deleteTrip', ['id'=>$trip->id]) }}" method="POST">
                    @method('delete')
                    @csrf
                    <a href="{{route ('editTrip',['id'=>$trip->id])}}">✏</a>
                    <button type="submit" onclick="return confirm ('Are you sure you want to delete this trip to {{ $trip->destinationCity }}?')">🗑</button>
                </form>     
    </section>
    @endforeach
</div>


@endsection
