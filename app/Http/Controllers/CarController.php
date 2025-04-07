<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function new()
    {
        return view('cars.new');
    }

    public function create(Request $request)
    {
        echo "Make = " . $request->make;
        echo "<br>Model = " . $request->model;
        echo "<br>Year = " . $request->year;
    }
}
?> 