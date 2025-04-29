@extends('layouts.app')

@section('content')

<h2>Add Mechanic</h2>

<form action="{{ route('mechanics.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input name="email" type="email" class="form-control" required>
    </div>

    <button class="btn btn-primary">Add Mechanic</button>
</form>

@endsection
