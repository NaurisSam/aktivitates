@extends('layouts.app')

@section('content')

<form action="/aktivitates" method="POST">
    @csrf
    <label for="Nosaukums">Nosaukums:</label>
    <input type="text" id="Nosaukums" name="Nosaukums" required>
    <br>
    <label for="Apraksts">Apraksts:</label>
    <textarea id="Apraksts" name="Apraksts" required></textarea>
    <br>
    <label for="KategorijasID">Kategorija ID:</label>
    <input type="number" id="KategorijasID" name="KategorijasID" required>
    <br>
    <label for="DalibniekuSkaits">Dalībnieku skaits:</label>
    <input type="number" id="DalibniekuSkaits" name="DalibniekuSkaits">
    <br>
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection