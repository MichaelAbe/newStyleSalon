@extends('layouts.layout')

@section('content')
    
<div>
    <h1>Appointments index page</h1>

    {{-- @foreach($appointments as $a){

    } --}}
    @foreach($appointments as $a)
    <div>
        name: {{ $a['name'] }} <br/>  
        stylist id: {{ $a['stylist_id'] }} <br/> 
        time: {{ $a['time'] }} <br/>
        email: {{ $a['email'] }} <br/>
        mobile: {{ $a['mobile'] }} <br/>

    </div>
@endforeach


{{-- $table->string('name');
$table->string('email');
$table->string('mobile');
$table->dateTime('time');
$table->integer('stylist_id'); --}}
    
</div>

@endsection