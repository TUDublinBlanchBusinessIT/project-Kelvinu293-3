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

Route::get('/cars/edit/{id}', [CarController::class, 'edit']);
Route::post('/cars/update', [CarController::class, 'update']);

use App\Http\Controllers\CarCalendarController;

Route::get('/cars/calendar', [CarCalendarController::class, 'display'])->name('cars.calendar');
