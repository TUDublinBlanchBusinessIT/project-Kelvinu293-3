@extends('layouts.app')

@section('content')

<h2>Mechanic Details</h2>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $mechanic->name }}</h5>
        <p class="card-text">Email: {{ $mechanic->email }}</p>

        <a href="{{ route('mechanics.edit', $mechanic->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('mechanics.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>

@endsection
