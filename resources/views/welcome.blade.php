@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold text-primary">Welcome to Car Service Center</h1>
    <p class="lead text-secondary">Manage your cars, mechanics, and bookings with ease.</p>
</div>

<div class="row text-center">
    <div class="col-md-4 mb-4">
        <div class="card border-primary shadow-sm h-100">
            <div class="card-body">
                <i class="bi bi-car-front display-4 text-primary mb-3"></i>
                <h4>{{ $carsCount }}</h4>
                <p class="text-muted">Cars Registered</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card border-success shadow-sm h-100">
            <div class="card-body">
                <i class="bi bi-person-wrench display-4 text-success mb-3"></i>
                <h4>{{ $mechanicsCount }}</h4>
                <p class="text-muted">Available Mechanics</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card border-warning shadow-sm h-100">
            <div class="card-body">
                <i class="bi bi-calendar-check display-4 text-warning mb-3"></i>
                <h4>{{ $bookingsCount }}</h4>
                <p class="text-muted">Total Bookings</p>
            </div>
        </div>
    </div>
</div>

@endsection

