<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Service App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('cars.index') }}">Car Service</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('mechanics*') ? 'active' : '' }}" href="{{ route('mechanics.index') }}">Mechanics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('bookings*') ? 'active' : '' }}" href="{{ route('bookings.index') }}">Bookings</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mb-5">
    @yield('content')
</div>

<footer class="bg-dark text-light text-center py-3 fixed-bottom">
    &copy; {{ date('Y') }} FixFast. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

