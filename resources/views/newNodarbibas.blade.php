@extends('layouts.app')

@section('content')

<h2>Jauna nodarbība</h2>

<form action="/nodarbibas" method="POST">
    @csrf
    <label for="AktivitatesID">Aktivitāte:</label>
    <input type="text" id="AktivitatesID" name="AktivitatesID" required>
    <br>
    <label for="VaditajsID">Vadītājs:</label>
    <input type="text" id="VaditajsID" name="VaditajsID" required>
    <br>
    <label for="Diena">Diena:</label>
    <select id="Diena" name="Diena" required>
        <option value="">-- Izvēlies dienu --</option>
        <option value="Pirmdiena">Pirmdiena</option>
        <option value="Otrdiena">Otrdiena</option>
        <option value="Trešdiena">Trešdiena</option>
        <option value="Ceturtdiena">Ceturtdiena</option>
        <option value="Piektdiena">Piektdiena</option>
        <option value="Sestdiena">Sestdiena</option>
        <option value="Svētdiena">Svētdiena</option>
    </select>
    <br>
    <label for="SakumaLaiks">Sākuma laiks:</label>
    <input type="time" id="SakumaLaiks" name="SakumaLaiks" required>
    <br>
    <label for="BeiguLaiks">Beigu laiks:</label>
    <input type="time" id="BeiguLaiks" name="BeiguLaiks" required>
    <br>
    <label for="Telpa">Telpa:</label>
    <input type="text" id="Telpa" name="Telpa">
    <br>
    <label for="MacibuGads">Mācību gads:</label>
    <input type="text" id="MacibuGads" name="MacibuGads">
    <br>
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection