<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StylistController;
use App\Http\Controllers\AppointmentsController;

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

Route::get('/stylists', [StylistController::class, 'index']);

Route::get('/stylists/{id}', [StylistController::class, 'show']);

// Route::get('/stylists/3', function () {
//     return view('welcome');
// });


// Route::get('/appointments', function () {
//     return view('appointments');
// });

Route::get('/appointments', [AppointmentsController::class, 'index']);