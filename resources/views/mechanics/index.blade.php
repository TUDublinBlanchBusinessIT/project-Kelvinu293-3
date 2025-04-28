@extends('layouts.app')
@section('content')
<h2>Bookings</h2>
@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif
<a href="{{ route('bookings.create') }}" class="btn btn-success mb-3">Add Booking</a>
<table class="table">
  <thead>
    <tr>
      <th>Car</th><th>Mechanic</th><th>Date</th><th>Notes</th><th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bookings as $booking)
    <tr>
      <td>{{ $booking->car->make }} {{ $booking->car->model }}</td>
      <td>{{ $booking->mechanic->name ?? 'N/A' }}</td>
      <td>{{ $booking->service_date }}</td>
      <td>{{ $booking->notes }}</td>
      <td>
        <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-info btn-sm">View</a>
        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-danger btn-sm" onclick="return confirm('Delete booking?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
