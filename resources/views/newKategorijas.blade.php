@extends('layouts.app')

@section('content')

<h2>Jauna kategorija</h2>

<form action="/kategorijas" method="POST">
    @csrf
    <label for="Nosaukums">Nosaukums:</label>
    <input type="text" id="Nosaukums" name="Nosaukums" required>
    <br>
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection
