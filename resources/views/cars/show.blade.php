@extends('layouts.app')
@section('content')
<h2>Car Details</h2>
<ul class="list-group">
  <li class="list-group-item"><strong>Make:</strong> {{ $car->make }}</li>
  <li class="list-group-item"><strong>Model:</strong> {{ $car->model }}</li>
  <li class="list-group-item"><strong>Year:</strong> {{ $car->year }}</li>
  <li class="list-group-item"><strong>Type:</strong> {{ $car->type }}</li>
  <li class="list-group-item"><strong>Transmission:</strong> {{ $car->transmission }}</li>
  <li class="list-group-item"><strong>Colour:</strong> {{ $car->colour }}</li>
</ul>
<a href="{{ route('cars.index') }}" class="btn btn-secondary mt-2">Back</a>
@endsection

