@extends('layouts.app')

@section('content')

<h2>Edit Mechanic</h2>

<form action="{{ route('mechanics.update', $mechanic->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Name</label>
        <input name="name" value="{{ $mechanic->name }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input name="email" type="email" value="{{ $mechanic->email }}" class="form-control" required>
    </div>

    <button class="btn btn-primary">Update Mechanic</button>
</form>

@endsection

