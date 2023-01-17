@extends('layouts.app')


@foreach ($mytripuser as $trip)
@if ($trip->date > now())


    @foreach ($trips as $item)
        @if ($item->id === $trip->id)
            <?php $trip->user_count = $item->user_count ?>
        @endif
    @endforeach
    
    <div class="line"></div>
    <article class="tripContainer">
        <div class="tripInfo">
            <div class="dateAndUsers">
                <p>{{$trip->date}}  </p>  
                <p>✅</p>
                @if ($trip->user_count === $trip->seat)
                    <p class="text-danger fw-bold">TRIP FULL</p>
                @else
                    <p>{{$trip->seat-$trip->user_count}}/{{$trip->seat}} free</p>
                @endif
            </div>
            <div class="titleAndDesc">
                <h5>{{$item->originCity}}->{{$item->destinationCity}}</h5>
                <p>{{$item->date}}</p>
            </div>
        </div>
        <div class="imgBtnContainer">
            <figure>
                <img class="imgtrips" src="{{$trip->imgDestination}}" alt="">
            </figure>
            <button class="enrollBtn"><a href="{{ url('/unbooking', $trip->id) }}">Unbooked</a></button>
            
            <td>
                <?php $trip->ifBooked = 1 ?>
                <a class="btn btn-sm btn-primary" href="{{ route('showTrip', ['id'=>$trip->id, 'user_count'=>$trip->user_count, 'ifBooked'=>$trip->ifBooked]) }}"><i class="fa fa-fw fa-eye"></i>🔍</a>
            </td>
        </div>

    </article>
@endif 
@endforeach

<div>
    {!! $trips->links()!!}
</div>











