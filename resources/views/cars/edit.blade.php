@extends('layouts.app')
@section('content')
<h2>Edit Car</h2>
<form action="{{ route('cars.update', $car->id) }}" method="POST">
  @csrf @method('PUT')
  <div class="mb-3"><label>Make</label><input name="make" class="form-control" value="{{ old('make', $car->make) }}" required></div>
  <div class="mb-3"><label>Model</label><input name="model" class="form-control" value="{{ old('model', $car->model) }}" required></div>
  <div class="mb-3"><label>Year</label><input name="year" type="number" class="form-control" value="{{ old('year', $car->year) }}" required></div>
  <div class="mb-3"><label>Type</label><input name="type" class="form-control" value="{{ old('type', $car->type) }}"></div>
  <div class="mb-3"><label>Transmission</label><input name="transmission" class="form-control" value="{{ old('transmission', $car->transmission) }}"></div>
  <div class="mb-3"><label>Colour</label><input name="colour" class="form-control" value="{{ old('colour', $car->colour) }}"></div>
  <button class="btn btn-warning">Update Car</button>
</form>
@endsection
