@extends('layouts.app')

@section('content')

<a href="/vaditaji/create" class="btn btn-primary">Jauns vadītājs</a>

<h2>Vadītāji</h2>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div>
@foreach ($vaditaji as $vaditajs)
    <br>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>ID:</strong> {{ $vaditajs->VaditajsID }}</p>
            <p class="card-title"><strong>Vārds uzvārds:</strong> {{ $vaditajs->Vards }} {{ $vaditajs->Uzvards }}</p>
            <p class="card-text"><strong>Telefons:</strong> {{ $vaditajs->Talrunis }}</p>
            <p class="card-text"><strong>E-pasts:</strong> {{ $vaditajs->Epasts }}</p>
            <p class="card-text"><strong>Specializācija:</strong> {{ $vaditajs->Specializacija }}</p>
            <a href="/vaditaji/{{ $vaditajs->VaditajsID }}/delete" class="btn btn-danger btn-sm">Dzēst</a>
            <a href="/vaditaji/{{ $vaditajs->VaditajsID }}/edit" class="btn btn-warning btn-sm">Rediģēt</a>
        </div>
    </div>
@endforeach
</div>

@endsection
