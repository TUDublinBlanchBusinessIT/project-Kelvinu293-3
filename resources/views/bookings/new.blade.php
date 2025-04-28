@extends('layouts.app')
@section('content')
<h2>New Booking</h2>
<form action="{{ route('bookings.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label>Car</label>
    <select name="car_id" class="form-control" required>
      @foreach($cars as $car)
      <option value="{{ $car->id }}" {{ (isset($selectedCarId) && $selectedCarId == $car->id) ? 'selected' : '' }}>
        {{ $car->make }} {{ $car->model }}
      </option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label>Mechanic</label>
    @if(count($mechanics) == 0)
    <div class="alert alert-warning">
      No mechanics available. <a href="{{ route('mechanics.create') }}">Add a mechanic</a> first!</div>
      @else
      <select name="mechanic_id" class="form-control" required>
        @foreach($mechanics as $mechanic)
        <option value="{{ $mechanic->id }}">{{ $mechanic->name }}</option>
        @endforeach
      </select>
      @endif
</div>

  <div class="mb-3">
    <label>Service Date</label>
    <input type="date" name="service_date" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Notes</label>
    <textarea name="notes" class="form-control"></textarea>
  </div>
  <button class="btn btn-primary">Book</button>
</form>
@endsection
