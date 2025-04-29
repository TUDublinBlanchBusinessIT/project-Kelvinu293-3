@extends('layouts.app')

@section('content')

<h2>Edit Booking</h2>

<form action="{{ route('bookings.update', $booking->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Car</label>
        <select name="car_id" class="form-control" required>
            @foreach($cars as $car)
                <option value="{{ $car->id }}" {{ $booking->car_id == $car->id ? 'selected' : '' }}>
                    {{ $car->make }} {{ $car->model }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Mechanic</label>
        <select name="mechanic_id" class="form-control">
            <option value="">-- Select Mechanic --</option>
            @foreach($mechanics as $mechanic)
                <option value="{{ $mechanic->id }}" {{ $booking->mechanic_id == $mechanic->id ? 'selected' : '' }}>
                    {{ $mechanic->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Service Date</label>
        <input type="date" name="service_date" value="{{ $booking->service_date }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Notes</label>
        <textarea name="notes" class="form-control">{{ $booking->notes }}</textarea>
    </div>

    <button class="btn btn-primary">Update Booking</button>
</form>

@endsection

