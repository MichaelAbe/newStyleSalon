@extends('layouts.layout')

@section('content')
    
<div>
    <h1>appointment Show Page</h1>
    {{-- <p>{{ $name }}</p>
    <p>{{ $specialty }}</p>
    <p>{{ $bio }}</p>
    <p>{{ $picture }}</p> --}}
    {{-- this is taking the variable that was passed in the route --}}
    

    <p>hello this is a the Show page for {{ $id }}</p>
    
</div>

@endsection