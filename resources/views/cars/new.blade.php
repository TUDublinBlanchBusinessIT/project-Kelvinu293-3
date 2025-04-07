<FORM method="POST" action="/cars/create"> 
    @csrf
    Enter car make: <input type="text" name="make"><br>
    Enter car model: <input type="text" name="model"><br>
    Enter year: <input type="number" name="year"><br>
    <input type="submit">
</FORM>
