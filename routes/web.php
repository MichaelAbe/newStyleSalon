<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stylists', function () {
    //get data from db and pass into view.
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
    return view('stylists', ['stylists' => $stylists] );
});