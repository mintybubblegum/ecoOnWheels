@extends('layouts.app')

@section('content')

<div>
    <button class="btn btn-primary" style="color: white">
        <a href="{{route('createTrip')}}">Create New Trip</a>
    </button>
</div>

<div class="d-flex flex-wrap row justify-content-center my-4">
    @foreach ($trips as $trip)
        <div class="card" style="width: 12rem;">
            <a href="{{route ('showTrip', $trip->id)}}">
                <img src="{{ $trip->imgDestination }}" class="card-img-top" alt="...">
                <h5 class="card-title"> {{ $trip->date }} </h5>
                <div class="card-body">
                    <h5 class="card-title"> {{ $trip->departureTime }} {{ $trip->originCity }}</h5>
                    <h5 class="card-title"> {{ $trip->arrivalTime }} {{ $trip->destinationCity }} </h5>
                    <h5 class="card-title price"> {{ $trip->price }} € </h5>
                    <h5 class="card-title"> {{ $trip->energyType }} </h5>
                </div>
            </a>
            <form class=formActions action="{{ route('deleteTrip', ['id'=>$trip->id]) }}" method="POST">
                @method('delete')
                @csrf
                <a href="{{route ('editTrip',['id'=>$trip->id])}}">✏</a>
                <button type="submit" onclick="return confirm ('Are you sure you want to delete this trip to {{ $trip->destinationCity }}?')">🗑</button>
            </form>
        </div>
    @endforeach
</div>

@endsection
