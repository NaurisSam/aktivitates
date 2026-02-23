@extends ('layouts.app')

@section ('content')

<form action="/vaditaji/{{$vaditajs->VaditajsID}}/update" method="POST">
    @csrf
    <label for="Vards">Vārds:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $vaditajs->Vards }}" id="Vards" name="Vards" required>
    <br><br>
    
    <label for="Uzvards">Uzvārds:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $vaditajs->Uzvards }}" id="Uzvards" name="Uzvards" required>
    <br><br>
    
    <label for="Talrunis">Tālrunis:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $vaditajs->Talrunis }}" id="Talrunis" name="Talrunis">
    <br><br>
    
    <label for="Epasts">E-pasts:</label>
    <input style="border: 1px solid #000000ff;" type="email" value="{{ $vaditajs->Epasts }}" id="Epasts" name="Epasts">
    <br><br>
    
    <label for="Specializacija">Specializācija:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $vaditajs->Specializacija }}" id="Specializacija" name="Specializacija">
    <br><br>
    
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection
