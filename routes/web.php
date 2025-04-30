<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MechanicController;

Route::resource('cars', CarController::class);
Route::resource('bookings', BookingController::class);
Route::resource('mechanics', MechanicController::class);

Route::get('/', function () {
    return view('welcome');
});

use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Booking;

Route::get('/', function () {
    $carsCount = Car::count();
    $mechanicsCount = Mechanic::count();
    $bookingsCount = Booking::count();
    return view('welcome', compact('carsCount', 'mechanicsCount', 'bookingsCount'));
});
