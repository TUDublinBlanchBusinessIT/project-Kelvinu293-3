@extends('layouts.app')

@section('content')
<h1>Add New Car</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('cars.store') }}" method="POST">
    @csrf
    <label>Make:</label>
    <input type="text" name="make" value="{{ old('make') }}" required><br>
    <label>Model:</label>
    <input type="text" name="model" value="{{ old('model') }}" required><br>
    <label>Year:</label>
    <input type="number" name="year" value="{{ old('year') }}" required><br>
    <label>Type:</label>
    <input type="text" name="type" value="{{ old('type') }}" required><br>
    <label>Transmission:</label>
    <input type="text" name="transmission" value="{{ old('transmission') }}" required><br>
    <label>Colour:</label>
    <input type="text" name="colour" value="{{ old('colour') }}" required><br>
    <button type="submit">Add Car</button>
</form>
<a href="{{ route('cars.index') }}">Back to Car List</a>
@endsection
