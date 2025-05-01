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
<!-- About Us Section -->
<div class="bg-light rounded p-5 mt-5 shadow-sm">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="text-primary">About Car Service Center</h2>
            <p class="text-muted">
                We are a trusted vehicle service center providing maintenance, diagnostics, and repair solutions for over a decade. Our certified mechanics ensure quality and satisfaction for every vehicle that enters our garage.
            </p>
            <p class="text-muted">
                Whether it's a regular oil change, complex engine diagnostics, or a complete vehicle inspection — we've got your back!
            </p>
            <a href="{{ route('cars.index') }}" class="btn btn-outline-primary mt-2">
                <i class="bi bi-arrow-right-circle"></i> Explore Our Services
            </a>
        </div>
    </div>
</div>
<!-- Services Offered -->
<div class="my-5">
    <h2 class="text-center text-primary mb-4">Our Services</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-info shadow-sm text-center">
                <div class="card-body">
                    <i class="bi bi-droplet-fill display-4 text-info"></i>
                    <h5 class="mt-3">Oil Change</h5>
                    <p class="text-muted">Quick and affordable oil changes using high-quality lubricants.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-danger shadow-sm text-center">
                <div class="card-body">
                    <i class="bi bi-exclamation-triangle-fill display-4 text-danger"></i>
                    <h5 class="mt-3">Brake Service</h5>
                    <p class="text-muted">Ensure your safety with professional brake checks and replacements.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-warning shadow-sm text-center">
                <div class="card-body">
                    <i class="bi bi-gear-fill display-4 text-warning"></i>
                    <h5 class="mt-3">Engine Diagnostics</h5>
                    <p class="text-muted">Advanced computer diagnostics for engine performance and faults.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Team -->
<div class="my-5">
    <h2 class="text-center text-success mb-4">Meet Our Mechanics</h2>
    <div class="row justify-content-center g-4">
        @foreach(App\Models\Mechanic::take(4)->get() as $mechanic)
            <div class="col-md-3">
                <div class="card h-100 text-center border-secondary shadow-sm">
                    <img src="https://cdn-icons-png.flaticon.com/512/147/147144.png"
                         class="card-img-top mx-auto mt-3"
                         style="width: 80px;"
                         alt="Mechanic">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mechanic->name }}</h5>
                        <p class="card-text text-muted"><i class="bi bi-envelope"></i> {{ $mechanic->email }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection

