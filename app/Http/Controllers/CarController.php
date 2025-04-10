<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function create(Request $request)
    {
        // Instantiate the Car model
        $car = new Car();

        // Use your custom setters
        $car->setMake($request->make);
        $car->setModel($request->model);
        $car->setYear($request->year);

        // Save to the database
        $car->save();

        return redirect('/cars/new')->with('success', 'Car saved!');
    }

    public function new()
    {
        return view('cars.new');
    }
}
?>