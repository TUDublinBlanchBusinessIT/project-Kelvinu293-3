@if(session('success'))
    <div style="color: green">{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('cars.create') }}">
    @csrf
    Car Make: <input type="text" name="make"><br><br>
    Car Model: <input type="text" name="model"><br><br>
    Year: <input type="number" name="year"><br><br>
    <input type="submit" value="Save Car">
</form>
