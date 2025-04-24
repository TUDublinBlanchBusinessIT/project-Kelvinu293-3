@extends('layouts.app')

@section('content')
<h1>Edit Car</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('cars.update', $car->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Make:</label>
    <input type="text" name="make" value="{{ old('make', $car->make) }}" required><br>
    <label>Model:</label>
    <input type="text" name="model" value="{{ old('model', $car->model) }}" required><br>
    <label>Year:</label>
    <input type="number" name="year" value="{{ old('year', $car->year) }}" required><br>
    <label>Type:</label>
    <input type="text" name="type" value="{{ old('type', $car->type) }}" required><br>
    <label>Transmission:</label>
    <input type="text" name="transmission" value="{{ old('transmission', $car->transmission) }}" required><br>
    <label>Colour:</label>
    <input type="text" name="colour" value="{{ old('colour', $car->colour) }}" required><br>
    <button type="submit">Update Car</button>
</form>
<a href="{{ route('cars.index') }}">Back to Car List</a>
@endsection
