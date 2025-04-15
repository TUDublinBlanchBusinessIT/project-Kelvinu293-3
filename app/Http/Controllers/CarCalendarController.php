<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;

class CarCalendarController extends Controller 
{ 
    public function display() 
    { 
        return view('cars.calendar'); 
    } 
}
