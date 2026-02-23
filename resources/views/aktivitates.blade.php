@extends('layouts.app')

@section('content')

<a href="/aktivitates/create" class="btn btn-primary">Jauns ieraksts</a>

<h2>Aktivitātes</h2>
<div>
@foreach ($aktivitates as $elem)
    <br>
    <div>
        <div class="card-body">
            <h5 class="card-title">ID: {{ $elem->AktivitatesID }}</h5>
            <p class="card-text">Nosaukums: {{ $elem->Nosaukums }}</p>
            <p class="card-text">Apraksts: {{ $elem->Apraksts }}</p>
            <p class="card-text">Kategorija: {{ $elem->KategorijasID }}</p>
            <p class="card-text">Dalībnieku skaits: {{ $elem->DalibniekuSkaits }}</p>
            <a href="/aktivitates/{{ $elem->AktivitatesID }}/delete" class="btn btn-light">Dzēst</a>
            <a href="/aktivitates/{{ $elem->AktivitatesID }}/edit" class="btn btn-light">Rediģēt</a>
        </div>
    </div>
@endforeach
</div>

@endsection

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif