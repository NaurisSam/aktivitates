@extends ('layouts.app')

@section ('content')

<form action="/nodarbibas/{{$nodarbiba->NodarbibasID}}/update" method="POST">
    @csrf
    <label for="AktivitatesID">Aktivitāte:</label>
    <input style="border: 1px solid #000000ff;" type="number" value="{{ $nodarbiba->AktivitatesID }}" id="AktivitatesID" name="AktivitatesID" required>
    <br><br>
    
    <label for="VaditajsID">Vadītājs:</label>
    <input style="border: 1px solid #000000ff;" type="number" value="{{ $nodarbiba->VaditajsID }}" id="VaditajsID" name="VaditajsID" required>
    <br><br>
    
    <label for="Diena">Diena:</label>
    <select style="border: 1px solid #000000ff;" id="Diena" name="Diena" required>
    <option value="">-- Izvēlies dienu --</option>

    <option value="Pirmdiena" {{ $nodarbiba->Diena == 'Pirmdiena' ? 'selected' : '' }}>Pirmdiena</option>
    <option value="Otrdiena" {{ $nodarbiba->Diena == 'Otrdiena' ? 'selected' : '' }}>Otrdiena</option>
    <option value="Trešdiena" {{ $nodarbiba->Diena == 'Trešdiena' ? 'selected' : '' }}>Trešdiena</option>
    <option value="Ceturtdiena" {{ $nodarbiba->Diena == 'Ceturtdiena' ? 'selected' : '' }}>Ceturtdiena</option>
    <option value="Piektdiena" {{ $nodarbiba->Diena == 'Piektdiena' ? 'selected' : '' }}>Piektdiena</option>
    <option value="Sestdiena" {{ $nodarbiba->Diena == 'Sestdiena' ? 'selected' : '' }}>Sestdiena</option>
    <option value="Svētdiena" {{ $nodarbiba->Diena == 'Svētdiena' ? 'selected' : '' }}>Svētdiena</option>
    </select>
    <br><br>
    
    <label for="SakumaLaiks">Sākuma laiks:</label>
    <input style="border: 1px solid #000000ff;" type="time" value="{{ $nodarbiba->SakumaLaiks }}" id="SakumaLaiks" name="SakumaLaiks" required>
    <br><br>
    
    <label for="BeiguLaiks">Beigu laiks:</label>
    <input style="border: 1px solid #000000ff;" type="time" value="{{ $nodarbiba->BeiguLaiks }}" id="BeiguLaiks" name="BeiguLaiks" required>
    <br><br>
    
    <label for="Telpa">Telpa:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $nodarbiba->Telpa }}" id="Telpa" name="Telpa">
    <br><br>
    
    <label for="MacibuGads">Mācību gads:</label>
    <input style="border: 1px solid #000000ff;" type="text" value="{{ $nodarbiba->MacibuGads }}" id="MacibuGads" name="MacibuGads">
    <br><br>
    
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection