@extends('layouts.app')

@section('content')

<h2>Mechanics</h2>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('mechanics.create') }}" class="btn btn-success mb-3">Add Mechanic</a>

<table class="table">
  <thead>
    <tr>
      <th>Name</th><th>Email</th><th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($mechanics as $mechanic)
    <tr>
      <td>{{ $mechanic->name }}</td>
      <td>{{ $mechanic->email }}</td>
      <td>
        <a href="{{ route('mechanics.show', $mechanic->id) }}" class="btn btn-info btn-sm">View</a>
        <a href="{{ route('mechanics.edit', $mechanic->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('mechanics.destroy', $mechanic->id) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-danger btn-sm" onclick="return confirm('Delete mechanic?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

