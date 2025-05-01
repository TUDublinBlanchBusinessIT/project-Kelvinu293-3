<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🚘 Car Service Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #003049;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-nav .nav-link.active {
            font-weight: bold;
            border-bottom: 2px solid #ffd60a;
        }

        .footer {
            background-color: #1c1c1c;
            color: #bbb;
            padding: 1rem 0;
        }

        .btn-toggle-mode {
            border: 1px solid #fff;
            color: #fff;
        }

        /* Dark mode styles */
        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        body.dark-mode .navbar, body.dark-mode .footer {
            background-color: #000;
        }

        body.dark-mode .card {
            background-color: #1f1f1f;
            color: #ddd;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="bi bi-wrench-adjustable-circle"></i> CarService
        </a>

        <div class="d-flex ms-auto">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('cars*') ? 'active' : '' }}" href="{{ route('cars.index') }}">
                        <i class="bi bi-car-front-fill"></i> Cars
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('mechanics*') ? 'active' : '' }}" href="{{ route('mechanics.index') }}">
                        <i class="bi bi-person-gear"></i> Mechanics
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('bookings*') ? 'active' : '' }}" href="{{ route('bookings.index') }}">
                        <i class="bi bi-calendar-event"></i> Bookings
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('reports') ? 'active' : '' }}" href="{{ route('reports') }}">
                        <i class="bi bi-clipboard-data"></i> Reports
                     </a>
                    </li>
            </ul>

            <button onclick="toggleDarkMode()" class="btn btn-sm btn-toggle-mode">
                🌗 Toggle Mode
            </button>
        </div>
    </div>
</nav>

<!-- MAIN CONTAINER -->
<div class="container py-4">

    <!-- Flash Success -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Flash Error -->
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-x-circle-fill"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Validation Errors -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li><i class="bi bi-exclamation-circle-fill"></i> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Content -->
    @yield('content')
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
        localStorage.setItem('theme', document.body.classList.contains('dark-mode') ? 'dark' : 'light');
    }

    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-mode');
    }
</script>

</body>
</html>