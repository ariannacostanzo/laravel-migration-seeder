@extends('templates.main')

@section('title', 'Home')
    
@section('main-content')
   
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
      <td>FN {{$train['train_code']}}</td>
      <td>{{$train['departure_station']}}</td>
      <td>{{$train['arrival_station']}}</td>
      <td>{{$train['departure_time']}} -> {{$train['arrival_time']}}</td>
      <td>{{$train['departure_date']}}</td>
    </tr>
    
    @empty
    <h3>There are no trains available</h3>
    @endforelse

    </tbody>
</table>
    
@endsection