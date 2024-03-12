@extends('templates.main')

@section('title', 'Home')

@section('cdns')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' integrity='sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==' crossorigin='anonymous'/>
@endsection
    
@section('main-content')

{{-- Tutta la logica avviene solo se ho istanziato trains --}}
@isset($trains)
    {{-- questo lo mostro solo se ho qualche records --}}
   @if (count($trains) > 1)
    <h3 class="my-4">The trains leaving from today on are: </h3>
        <table class="table table-hover table-dark">
        <thead>
            <tr>
            <th scope="col">Train code</th>
            <th scope="col">Departure Station</th>
            <th scope="col">Arrival Station</th>
            <th scope="col">Departure/Arrival time</th>
            <th scope="col">Departure Date</th>
            </tr>
        </thead>
        <tbody>
    {{-- itero su trains --}}
    @forelse ($trains as $train)
    
    <tr>
      <td>{{$train->getTrainCode()}}</td>
      <td>{{$train->departure_station}}</td>
      <td>{{$train->arrival_station}}</td>
      <td>{{$train->getDepartureTime()}} <i class="fa-solid fa-arrow-right"></i> {{$train->getArrivalTime()}}</td>
      <td>{{$train->getDate()}}</td>
    </tr>
    
    {{-- Se non ho records mostro questo messaggio senza tabella --}}
    @empty
    <h4>There are no trains leaving today</h4>
    @endforelse

    </tbody>
</table>
@endif
{{-- se non ho la variabile trains mostro questo --}}
@else
<h3>No train available</h3>
@endisset
@endsection