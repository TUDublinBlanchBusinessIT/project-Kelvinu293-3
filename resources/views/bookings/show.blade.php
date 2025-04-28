@extends('layouts.app')
@section('content')
<h2>Booking Details</h2>
<ul class="list-group">
  <li class="list-group-item"><strong>Car:</strong> {{ $booking->car->make }} {{ $booking->car->model }}</li>
  <li class="list-group-item"><strong>Mechanic:</strong> {{ $booking->mechanic->name ?? 'N/A' }}</li>
  <li class="list-group-item"><strong>Service Date:</strong> {{ $booking->service_date }}</li>
  <li class="list-group-item"><strong>Notes:</strong> {{ $booking->notes }}</li>
</ul>
<a href="{{ route('bookings.index') }}" class="btn btn-secondary mt-2">Back</a>
@endsection
