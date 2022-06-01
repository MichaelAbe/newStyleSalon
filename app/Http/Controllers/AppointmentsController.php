<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentsController extends Controller
{
    public function index(){
        // $appointments = [
        //     ['time_scheduled' =>'morning', 
        //     'customer' => 'customer 1',
        //     'stylist_id' => '1',
        //     ],
        //     ['time_scheduled' =>'afternoon', 
        //     'customer' => 'customer 2',
        //     'stylist_id' => '2',
        //     ],
        //     ['time_scheduled' =>'evening', 
        //     'customer' => 'customer 3',
        //     'stylist_id' => '3',
        //     ],
        //     ['time_scheduled' =>'night', 
        //     'customer' => 'customer 4',
        //     'stylist_id' => '4',
        //     ],
        // ];


        $appointments = Appointment::all();


    
     
    
        return view('/appointments.index', 
        ['appointments' => $appointments]
     );
    }

    public function show($id){

        $appointment = Appointment::findOrFail($id);

        return view('/appointments.show', ['appointment'=> $appointment]);
    }

    public function create(){
        return view('/appointments.create');
    }

    public function store(){
        // error_log(request('name'));
        // error_log(request('email'));
        // error_log(request('mobile'));
        // error_log(request('time'));
        // error_log(request('stylist_id'));


        $app = new Appointment();

        $app->name = request('name');
        $app->email = request('email');
        $app->mobile = request('mobile');
        
        $unformatted = request('time');
        $findSlash = "/\\\\/i";
        $app->time = preg_replace($findSlash, '', $unformatted);
        

        $app->stylist_id = request('stylist_id');

        error_log($app['time']);

        // $app->save();

        return redirect('/');
    }
}
