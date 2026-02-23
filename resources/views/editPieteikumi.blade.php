@extends ('layouts.app')

@section ('content')

<form action="/pieteikumi/{{$pieteikums->PieteikumsID}}/update" method="POST">
    @csrf
    
    <label for="DalibnieksID">Dalībnieks:</label>
    <input style="border: 1px solid #000000ff;" type="number" value="{{ $pieteikums->DalibnieksID }}" id="DalibnieksID" name="DalibnieksID" required>
    <br><br>
    
    <label for="NodarbibasID">Nodarbības:</label>
    <input style="border: 1px solid #000000ff;" type="number" value="{{ $pieteikums->NodarbibasID }}" id="NodarbibasID" name="NodarbibasID" required>
    <br><br>
    
    <label for="PieteiksanasDatums">Pieteikšanās datums:</label>
    <input style="border: 1px solid #000000ff;" type="date" value="{{ $pieteikums->PieteiksanasDatums }}" id="PieteiksanasDatums" name="PieteiksanasDatums" required>
    <br><br>
    
    <label for="Statuss">Statuss:</label>
    <select id="Statuss" name="Statuss">
        <option value="Gaida apstiprinājumu" @if($pieteikums->Statuss === 'Gaida apstiprinājumu') selected @endif>Gaida apstiprinājumu</option>
        <option value="Apstiprināts" @if($pieteikums->Statuss === 'Apstiprināts') selected @endif>Apstiprināts</option>
        <option value="Noraidīts" @if($pieteikums->Statuss === 'Noraidīts') selected @endif>Noraidīts</option>
    </select>
    <br><br>
    
    <button type="submit" class="btn btn-info">Apstiprināt</button>
</form>

@endsection
