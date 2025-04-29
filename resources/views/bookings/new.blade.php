@extends('layouts.app')

@section('content')

<h2>Add Booking</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('bookings.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Car</label>
        <select name="car_id" class="form-control" required>
            <option value="">-- Select Car --</option>
            @foreach($cars as $car)
                <option value="{{ $car->id }}">{{ $car->make }} {{ $car->model }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Mechanic</label>
        <select name="mechanic_id" class="form-control">
            <option value="">-- Select Mechanic --</option>
            @foreach($mechanics as $mechanic)
                <option value="{{ $mechanic->id }}">{{ $mechanic->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Service Date</label>
        <input type="date" name="service_date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Notes</label>
        <textarea name="notes" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save Booking</button>
</form>

@endsection

