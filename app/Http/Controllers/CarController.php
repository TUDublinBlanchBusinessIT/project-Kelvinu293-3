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
            'make' => 'required|string|max:30',
            'model' => 'required|string|max:30',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'type' => 'nullable|string|max:30',
            'transmission' => 'nullable|string|max:20',
            'colour' => 'nullable|string|max:20',
        ]);
        $car = Car::create($validated);
        // Redirect straight to booking creation for this car
        return redirect()->route('bookings.create', ['car_id' => $car->id]);
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
            'make' => 'required|string|max:30',
            'model' => 'required|string|max:30',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'type' => 'nullable|string|max:30',
            'transmission' => 'nullable|string|max:20',
            'colour' => 'nullable|string|max:20',
        ]);
        $car->update($validated);
        return redirect()->route('cars.index')->with('success', 'Car updated!');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted!');
    }
}
