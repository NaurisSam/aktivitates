@extends('layouts.app')

@section('content')

<form action="/pieteikumi" method="POST">
    @csrf
    <label for="DalibnieksID">Dalībnieks:</label>
    <input type="text" id="DalibnieksID" name="DalibnieksID" required>
    <br>
    <label for="NodarbibasID">Nodarbība:</label>
    <input type="text" id="NodarbibasID" name="NodarbibasID" required>
    <br>
    <label for="PieteiksanasDatums">Pieteikšanās datums:</label>
    <input type="date" id="PieteiksanasDatums" name="PieteiksanasDatums" required>
    <br>
    <label for="Statuss">Statuss:</label>
    <select id="Statuss" name="Statuss">
        <option value="Gaida apstiprinājumu">Gaida apstiprinājumu</option>
        <option value="Apstiprināts">Apstiprināts</option>
        <option value="Noraidīts">Noraidīts</option>
    </select>
    <br>
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection