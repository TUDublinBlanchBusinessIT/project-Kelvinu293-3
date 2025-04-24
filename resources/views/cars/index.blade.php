@extends('layouts.app')

@section('content')
<h1>Car List</h1>
@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
<a href="{{ route('cars.create') }}">Add New Car</a>
<table border="1">
    <thead>
        <tr>
            <th>Make</th><th>Model</th><th>Year</th><th>Type</th>
            <th>Transmission</th><th>Colour</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->make }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->year }}</td>
            <td>{{ $car->type }}</td>
            <td>{{ $car->transmission }}</td>
            <td>{{ $car->colour }}</td>
            <td>
                <a href="{{ route('cars.show', $car->id) }}">View</a>
                <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this car?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


