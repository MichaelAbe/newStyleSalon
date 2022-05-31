<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StylistController extends Controller
{
    public function index(){
        $stylists = [
            ['name' =>'Leo', 
            'specialty' => 'cutting',
            'picture' => 'a picture of the stylist',
            'bio' => 'leader fave color blue'
            ],
            ['name' =>'Mich',
            'specialty' => 'conditioning',
            'picture' => 'a picture of the stylist',
            'bio' => 'fave color orange'
            ],
            ['name' =>'Donny',
            'specialty' => 'color',
            'picture' => 'a picture of the stylist',
            'bio' => 'fave color purple'
            ],
            ['name' =>'Ralph',
            'specialty' => 'conditioning',
            'picture' => 'a picture of the stylist',
            'bio' => 'fave color red'
            ]
        ];
    
        $test =request('test');
    
        return view('stylists', 
        ['stylists' => $stylists,
        "test" => $test,
        ]
     );
    }

    public function show($id){
        return view('show', ['id'=> $id]);
    }
}