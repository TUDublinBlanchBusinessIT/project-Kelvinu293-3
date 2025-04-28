<!DOCTYPE html>
<html>
<head>
    <title>Car Service App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Car Service</a>
        <div>
            <a class="nav-link d-inline" href="{{ route('cars.index') }}">Cars</a>
            <a class="nav-link d-inline" href="{{ route('mechanics.index') }}">Mechanics</a>
            <a class="nav-link d-inline" href="{{ route('bookings.index') }}">Bookings</a>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
