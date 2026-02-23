@extends ('layouts.app')

@section ('content')

<form action="/dalibnieki/{{$dalibnieks->DalibnieksID}}/update" method="POST">
    @csrf

    <label for="Vards">Vārds:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $dalibnieks->Vards }}" id="Vards" name="Vards" required>
    <br><br>
    
    <label for="Uzvards">Uzvārds:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $dalibnieks->Uzvards }}" id="Uzvards" name="Uzvards" required>
    <br><br>
    
    <label for="Klase">Klase:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $dalibnieks->Klase }}" id="Klase" name="Klase">
    <br><br>
    
    <label for="Talrunis">Tālrunis:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $dalibnieks->Talrunis }}" id="Talrunis" name="Talrunis">
    <br><br>
    
    <label for="Epasts">E-pasts:</label>
    <input style="border: 1px solid #000000ff;" type="email" value="{{ $dalibnieks->Epasts }}" id="Epasts" name="Epasts">
    <br><br>
    
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection
