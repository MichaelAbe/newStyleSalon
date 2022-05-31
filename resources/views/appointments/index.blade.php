@extends('layouts.layout')

@section('content')
    
<div>
    <h1>Appointments index page</h1>

    {{-- @foreach($appointments as $a){

    } --}}
    @foreach($appointments as $a)
    <div>
        {{ $a['customer'] }} has an appointment with <br/>  
        {{ $a['stylist_id'] }} at <br/> 
        {{ $a['time_scheduled'] }}

    </div>
@endforeach
{{--     
['time_scheduled' =>'night', 
'customer' => 'customer 4',
'stylist_id' => '4',
], --}}
    
</div>

@endsection