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
    $stylist = [
        'name' =>'Stylist name variable',
        'specialty' => 'what they specialize in',
        'picture' => 'a picture of the stylist',
        'bio' => 'a short bio of the stylist'
    ];
    return view('stylists', $stylist);
});
