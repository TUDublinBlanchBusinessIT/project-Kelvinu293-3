<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MechanicController;

Route::resource('cars', CarController::class);
Route::resource('bookings', BookingController::class);
Route::resource('mechanics', MechanicController::class);