@extends('layouts.app')

@section('content')

<div class="d-flex flex-wrap row justify-content-center my-4">
    @foreach ($trips as $trip)
        <div class="card" style="width: 18rem;">
            <img src="{{ $trip->imgDestination }}" class="card-img-top" alt="...">
            <h5 class="card-title text-primary"> {{ $trip->date }} </h5>
            <div class="card-body bg-dark">
                <h5 class="card-title text-primary"> {{ $trip->departureTime }} {{ $trip->originCity }}</h5>
                <h5 class="card-title text-warning"> {{ $trip->arrivalTime }} {{ $trip->destinationCity }} </h5>
                <h5 class="card-title text-warning"> {{ $trip->price }} € </h5>
                <h5 class="card-title text-warning"> {{ $trip->energyType }} </h5>
            </div>
        </div>
    @endforeach
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
