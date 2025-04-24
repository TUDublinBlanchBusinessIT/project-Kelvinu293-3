<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.new');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'make' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'type' => 'required|string',
            'transmission' => 'required|string',
            'colour' => 'required|string',
        ]);
        Car::create($validated);
        return redirect()->route('cars.index')->with('success', 'Car created successfully!');
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'make' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'type' => 'required|string',
            'transmission' => 'required|string',
            'colour' => 'required|string',
        ]);
        $car->update($validated);
        return redirect()->route('cars.index')->with('success', 'Car updated successfully!');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully!');
    }
}
?>