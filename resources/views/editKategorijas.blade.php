@extends('layouts.app')

@section('content')

<form action="/kategorijas/{{ $kategorija->KategorijasID }}/update" method="POST">
    @csrf
    <label for="Nosaukums">Nosaukums:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $kategorija->Nosaukums }}" id="Nosaukums" name="Nosaukums" required>
    <br><br>
    
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection