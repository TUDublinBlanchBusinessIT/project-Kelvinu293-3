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

Route::get('/cars/new', 'App\Http\Controllers\CarController@new');
Route::post('/cars/create', 'App\Http\Controllers\CarController@create')->name('cars.create');

use App\Http\Controllers\CarController;
Route::get('/cars/edit/{id}', [CarController::class, 'edit'])->name('cars.edit');
Route::post('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::delete('/cars/destroy/{id}', [CarController::class, 'destroy'])->name('cars.destroy');



use App\Http\Controllers\CarCalendarController;

Route::get('/cars/calendar', [CarCalendarController::class, 'display'])->name('cars.calendar');

Route::get('cars/displaygrid', 'App\Http\Controllers\CarController@displayGrid')->name('cars.displaygrid');

