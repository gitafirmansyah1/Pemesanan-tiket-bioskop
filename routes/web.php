<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
// });

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function(){
    Route::resource('user',UserController::class)->middleware('isAdmin');
    Route::resource('movies',MovieController::class)->middleware('isAdmin');
    Route::resource('bookings',BookingController::class);
    Route::resource('payment',PaymentController::class);
    Route::resource('tickets',TicketsController::class);
});
 tickets

Route::middleware('auth')->group(function(){
    Route::resource('user',UserController::class)->middleware('isAdmin');
    Route::resource('movies',MovieController::class)->middleware('isAdmin');
    Route::resource('tickets',TicketsController::class);
});
Route::resource('user',UserController::class);
Route::resource('movies',MovieController::class)->middleware('isAdmin');
Route::resource('bookings',BookingController::class);
});

 main
 main
