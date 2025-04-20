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
        $car->setType($request->type);
        $car->setTransmission($request->transmission);
        $car->setColour($request->colour);

        // Save to the database
        $car->save();

        return redirect('/cars/new')->with('success', 'Car saved!');
    }

    public function new()
    {
        return view('cars.new');
    }
    
    public function edit($id){
        $car = \App\Models\Car::find($id);
        return view('cars.edit')->with('car', $car);
    }

    public function update(Request $request)
    {
        $car = \App\Models\Car::find($request->id);
        $car->setMake($request->make);
        $car->setModel($request->model);
        $car->setYear($request->year);
        $car->setType($request->type);
        $car->setTransmission($request->transmission);
        $car->setColour($request->colour);
        $car->save();

        return redirect('/cars')->with('success', 'Car updated successfully!');
    }
    
    public function displayGrid(Request $request)
    {
        $cars = \App\Models\Car::all();
        return view('cars.displaygrid')->with('cars', $cars);    
    }
    
   
}


?>