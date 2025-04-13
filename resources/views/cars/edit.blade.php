<!DOCTYPE html>
<html>
<head>
    <title>Edit Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Car</h2>

    <form method="POST" action="/cars/update">
        @csrf
        <input type="hidden" name="id" value="{{ $car->id }}">

        <div class="mb-3">
            <label>Car Make</label>
            <input type="text" class="form-control" name="make" value="{{ $car->make }}">
        </div>

        <div class="mb-3">
            <label>Car Model</label>
            <input type="text" class="form-control" name="model" value="{{ $car->model }}">
        </div>

        <div class="mb-3">
            <label>Year</label>
            <input type="number" class="form-control" name="year" value="{{ $car->year }}">
        </div>

        <button type="submit" class="btn btn-success">Update Car</button>
    </form>
</div>
</body>
</html>
