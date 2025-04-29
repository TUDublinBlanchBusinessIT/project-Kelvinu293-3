@extends('layouts.app')

@section('content')

<h2>Booking Details</h2>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Car: {{ $booking->car->make ?? 'Unknown' }} {{ $booking->car->model ?? '' }}</h5>
        <p class="card-text">Mechanic: {{ $booking->mechanic->name ?? 'Unassigned' }}</p>
        <p class="card-text">Service Date: {{ $booking->service_date }}</p>
        <p class="card-text">Notes: {{ $booking->notes }}</p>

        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>

@endsection
