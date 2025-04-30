<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🚘 Car Service Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .footer {
            background: #1c1c1c;
            color: #ccc;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="bi bi-wrench-adjustable-circle"></i> CarService
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('cars*') ? 'active' : '' }}" href="{{ route('cars.index') }}">
                        <i class="bi bi-car-front"></i> Cars
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('mechanics*') ? 'active' : '' }}" href="{{ route('mechanics.index') }}">
                        <i class="bi bi-person-wrench"></i> Mechanics
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('bookings*') ? 'active' : '' }}" href="{{ route('bookings.index') }}">
                        <i class="bi bi-calendar-check"></i> Bookings
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mb-5">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-x-circle-fill"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li><i class="bi bi-exclamation-circle-fill"></i> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

