@extends('layouts.app')
@section('content')
<h2>Add Car</h2>
<form action="{{ route('cars.store') }}" method="POST">
  @csrf
  <div class="mb-3"><label>Make</label><input name="make" class="form-control" required></div>
  <div class="mb-3"><label>Model</label><input name="model" class="form-control" required></div>
  <div class="mb-3"><label>Year</label><input name="year" type="number" class="form-control" required></div>
  <div class="mb-3"><label>Type</label><input name="type" class="form-control"></div>
  <div class="mb-3"><label>Transmission</label><input name="transmission" class="form-control"></div>
  <div class="mb-3"><label>Colour</label><input name="colour" class="form-control"></div>
  <button class="btn btn-primary">Add Car</button>
</form>
@endsection

