<!DOCTYPE html>
<html>
<head>
    <title>Add a Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">My Car Garage</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/cars/new">Add Car</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cars">View Cars</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h2 class="mb-4">Add a New Car</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('cars.create') }}">
        @csrf
        <div class="mb-3">
            <label for="make" class="form-label">Car Make</label>
            <input type="text" class="form-control" id="make" name="make" required>
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Car Model</label>
            <input type="text" class="form-control" id="model" name="model" required>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" class="form-control" id="year" name="year" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Fuel Type</label>
            <input type="number" class="form-control" id="type" name="type" required>
        </div>

        <div class="mb-3">
            <label for="transmission" class="form-label">Transmission</label>
            <input type="text" class="form-control" id="transmission" name="transmission" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Car</button>
    </form>
</div>

</body>
</html>
