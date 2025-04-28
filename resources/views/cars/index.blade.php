@extends('layouts.app')
@section('content')
<h2>Cars</h2>
@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif
<a href="{{ route('cars.create') }}" class="btn btn-success mb-3">Add Car</a>
<table class="table">
  <thead>
    <tr>
      <th>Make</th><th>Model</th><th>Year</th><th>Type</th><th>Colour</th><th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cars as $car)
    <tr>
      <td>{{ $car->make }}</td>
      <td>{{ $car->model }}</td>
      <td>{{ $car->year }}</td>
      <td>{{ $car->type }}</td>
      <td>{{ $car->colour }}</td>
      <td>
        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info btn-sm">View</a>
        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-danger btn-sm" onclick="return confirm('Delete car?')">Delete</button>
        </form>
        <a href="{{ route('bookings.create', ['car_id' => $car->id]) }}" class="btn btn-primary btn-sm">Book Service</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection




