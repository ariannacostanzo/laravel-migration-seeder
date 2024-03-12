@extends('templates.main')

@section('title', 'Home')
    
@section('main-content')

   @if (isset($trains))
    <h3 class="my-4">The trains leaving today are: </h3>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Train code</th>
            <th scope="col">Departure Station</th>
            <th scope="col">Arrival Station</th>
            <th scope="col">Departure/Arrival</th>
            <th scope="col">Departure Date</th>
            </tr>
        </thead>
        <tbody>
    
    
    
    @forelse ($trains as $train)
    
    <tr>
      <td>{{$train->getTrainCode()}}</td>
      <td>{{$train->departure_station}}</td>
      <td>{{$train->arrival_station}}</td>
      <td>{{$train->getDepartureTime()}} -> {{$train->getArrivalTime()}}</td>
      <td>{{$train->getDate()}}</td>
    </tr>
    
    @empty
    <h4>There are no trains leaving today</h4>
    @endforelse

    </tbody>
</table>
@else
<h3>No train available</h3>
@endif
@endsection