@extends('layouts.layout')

@section('content')
    
<div>
    <h1>Stylists index page</h1>
    {{-- <p>{{ $name }}</p>
    <p>{{ $specialty }}</p>
    <p>{{ $bio }}</p>
    <p>{{ $picture }}</p> --}}
    {{-- this is taking the variable that was passed in the route --}}

    @foreach($stylists as $s)
        <div>
            {{ $s['name']}}

        </div>
    @endforeach
    
</div>

@endsection