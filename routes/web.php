<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\BookingController;

Route::resource('cars', CarController::class);
Route::resource('mechanics', MechanicController::class);
Route::resource('bookings', BookingController::class);

// Optional: redirect root to cars
Route::get('/', fn() => redirect()->route('cars.index'));


