@extends('templates.main')

@section('title', 'Home')
    
@section('main-content')
   
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Train code</th>
        <th scope="col">Departure Station</th>
        <th scope="col">Arrival Station</th>
        <th scope="col">Departure/Arrival</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($trains as $train)
    
    <tr>
      <td>FN {{$train['train_code']}}</td>
      <td>{{$train['departure_station']}}</td>
      <td>{{$train['arrival_station']}}</td>
      <td>{{$train['departure_time']}} -> {{$train['arrival_time']}}</td>
    </tr>
    
    @empty
    <h3>There are no trains available</h3>
    @endforelse

    
    </tbody>
</table>
    
@endsection