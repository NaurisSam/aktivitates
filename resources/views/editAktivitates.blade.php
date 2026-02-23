@extends ('layouts.app')

@section ('content')

<form action="/aktivitates/{{$aktivitates->AktivitatesID}}/update" method="POST">
    @csrf
    <label for="Nosaukums">Nosaukums:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $aktivitates->Nosaukums }}" id="Nosaukums" name="Nosaukums" required>
    <br><br>
    
    <label for="Apraksts">Apraksts:</label>
    <textarea style="border: 1px solid #000000ff;" id="Apraksts" name="Apraksts" required>{{ $aktivitates->Apraksts }}</textarea>
    <br><br>
    
    <label for="KategorijasID">Kategorija:</label>
    <input style="border: 1px solid #000000ff;" type="number" value="{{ $aktivitates->KategorijasID }}" id="KategorijasID" name="KategorijasID" required>
    <br><br>
    
    <label for="DalibniekuSkaits">Dalībnieku skaits:</label>
    <input style="border: 1px solid #000000ff;" type="number" value="{{ $aktivitates->DalibniekuSkaits }}" id="DalibniekuSkaits" name="DalibniekuSkaits">
    <br><br>
    
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection