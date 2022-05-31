@extends('layouts.layout')

@section('content')
    
<div>
    <h1>appointment show page</h1>
    {{-- <p>{{ $name }}</p>
    <p>{{ $specialty }}</p>
    <p>{{ $bio }}</p>
    <p>{{ $picture }}</p> --}}
    {{-- this is taking the variable that was passed in the route --}}
    

    <div class="wrapper appointment-details">
        <h1>{{ $appointment['customer']}} has an appointment with {{ $appointment['stylist_id']}} in the {{ $appointment['time_scheduled']}}</h1>
    </div>
    
</div>

@endsection