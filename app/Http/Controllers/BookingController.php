<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('car')->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create(Request $request)
    {
        $carId = $request->get('car_id');
        return view('bookings.new', compact('carId'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'customer_name' => 'required|string|max:100',
            'date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        Booking::create($validated);

        return redirect()->route('bookings.index');
    }
}


