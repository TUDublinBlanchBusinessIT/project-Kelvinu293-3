@extends('layouts.app')
@section('content')

<h2>Add Booking</h2>

<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <input type="hidden" name="car_id" value="{{ $carId }}">
    
    <div class="mb-3">
        <label>Name</label>
        <textarea name="text" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Service Date</label>
        <input name="service_date" type="date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Notes</label>
        <textarea name="notes" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary">Add Booking</button>
</form>

@endsection
