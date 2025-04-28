<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('car', 'mechanic')->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create(Request $request)
    {
        $cars = Car::all();
        $mechanics = Mechanic::all();
        $selectedCarId = $request->car_id;
        return view('bookings.new', compact('cars', 'mechanics', 'selectedCarId'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'mechanic_id' => 'required|exists:mechanics,id',
            'service_date' => 'required|date',
            'notes' => 'nullable|string'
        ]);
        Booking::create($validated);
        return redirect()->route('bookings.index')->with('success', 'Booking added!');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $cars = Car::all();
        $mechanics = Mechanic::all();
        return view('bookings.edit', compact('booking', 'cars', 'mechanics'));
    }

    public function update(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'mechanic_id' => 'required|exists:mechanics,id',
            'service_date' => 'required|date',
            'notes' => 'nullable|string'
        ]);
        $booking->update($validated);
        return redirect()->route('bookings.index')->with('success', 'Booking updated!');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted!');
    }
}

