@extends('layouts.layout')

@section('content')
    
<div>
    <h1>Create appointment page</h1>
   
    <div class="wrapper create-appointment">
        <form action="" method="">
            <label for="name">name</label>
            <input type="text" id="name" name="name">
            <label for="email">email</label>
            <input type="text" id="email" name='email'>
            <label for="mobile">mobile phone number</label>
            <input type="text" id="mobile" name="mobile">
            
            <div class="form-group">
                <div class='input-group date' id='CalendarDateTime'>
                <input type='text' class="form-control" />
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
            
            <label for="stylist_id">preffered stylist</label>
            <select name="stylist_id" id="stylist_id">
                <option value="1">leo</option>
                <option value="2">mich</option>
                <option value="3">donny</option>
                <option value="4">ralph</option>
            </select>
            <input type="submit" value="book appointment">

    </div>
    
{{-- name
email
mobile
time
stylist_id --}}

</div>

@endsection