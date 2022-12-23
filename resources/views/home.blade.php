@extends('layouts.app')

@section('content')

<div>
    <button>
        <a href="{{route('createTrip')}}">Create New Trip</a>
    </button>
</div>

<div class="d-flex flex-wrap row justify-content-center my-4">
    @foreach ($trips as $trip)
        <div class="card" style="width: 18rem;">
            <a href="{{route ('showTrip', $trip->id)}}">
                <img src="{{ $trip->imgDestination }}" class="card-img-top" alt="...">
                <h5 class="card-title text-primary"> {{ $trip->date }} </h5>
                <div class="card-body bg-dark">
                    <h5 class="card-title text-primary"> {{ $trip->departureTime }} {{ $trip->originCity }}</h5>
                    <h5 class="card-title text-warning"> {{ $trip->arrivalTime }} {{ $trip->destinationCity }} </h5>
                    <h5 class="card-title text-warning"> {{ $trip->price }} € </h5>
                    <h5 class="card-title text-warning"> {{ $trip->energyType }} </h5>
                </div>
            </a>
            <form action="{{ route('deleteTrip', ['id'=>$trip->id]) }}" method="POST">
                @method('delete')
                @csrf
                <a href="{{route ('editTrip',['id'=>$trip->id])}}">✏</a>
                <button type="submit" onclick="return confirm ('Are you sure you want to delete this trip to {{ $trip->destinationCity }}?')">🗑</button>
            </form>
        </div>
    @endforeach
</div>

@endsection
