@extends('layouts.app')

@section('content')

<a href="/dalibnieki/create" class="btn btn-primary">Jauns dalībnieks</a>

<h2>Dalībnieki</h2>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div>
@foreach ($dalibnieki as $dalibnieks)
    <br>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>ID:</strong> {{ $dalibnieks->DalibnieksID }}</p>
            <p class="card-title"><strong>Vārds uzvārds:</strong> {{ $dalibnieks->Vards }} {{ $dalibnieks->Uzvards }}</p>
            <p class="card-text"><strong>Klase:</strong> {{ $dalibnieks->Klase }}</p>
            <p class="card-text"><strong>Telefons:</strong> {{ $dalibnieks->Talrunis }}</p>
            <p class="card-text"><strong>E-pasts:</strong> {{ $dalibnieks->Epasts }}</p>
            <a href="/dalibnieki/{{ $dalibnieks->DalibnieksID }}/delete" class="btn btn-danger btn-sm">Dzēst</a>
            <a href="/dalibnieki/{{ $dalibnieks->DalibnieksID }}/edit" class="btn btn-warning btn-sm">Rediģēt</a>
        </div>
    </div>
@endforeach
</div>

@endsection
