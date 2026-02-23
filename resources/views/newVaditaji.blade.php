@extends('layouts.app')

@section('content')

<form action="/vaditaji" method="POST">
    @csrf
    <label for="Vards">Vārds:</label>
    <input type="text" id="Vards" name="Vards" required>
    <br>
    <label for="Uzvards">Uzvārds:</label>
    <input type="text" id="Uzvards" name="Uzvards" required>
    <br>
    <label for="Talrunis">Tālrunis:</label>
    <input type="text" id="Talrunis" name="Talrunis">
    <br>
    <label for="Epasts">E-pasts:</label>
    <input type="email" id="Epasts" name="Epasts">
    <br>
    <label for="Specializacija">Specializācija:</label>
    <textarea id="Specializacija" name="Specializacija"></textarea>
    <br>
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection
