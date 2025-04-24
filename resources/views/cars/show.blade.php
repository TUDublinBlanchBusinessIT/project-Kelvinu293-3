@extends('layouts.app')

@section('content')
<h1>Car Details</h1>
<ul>
    <li><strong>Make:</strong> {{ $car->make }}</li>
    <li><strong>Model:</strong> {{ $car->model }}</li>
    <li><strong>Year:</strong> {{ $car->year }}</li>
    <li><strong>Type:</strong> {{ $car->type }}</li>
    <li><strong>Transmission:</strong> {{ $car->transmission }}</li>
    <li><strong>Colour:</strong> {{ $car->colour }}</li>
</ul>
<a href="{{ route('cars.index') }}">Back to Car List</a>
<a href="{{ route('cars.edit', $car->id) }}">Edit</a>
<form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Delete this car?')">Delete</button>
</form>
@endsection
