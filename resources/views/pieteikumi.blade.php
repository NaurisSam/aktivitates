@extends('layouts.app')

@section('content')

<a href="/pieteikumi/create" class="btn btn-primary">Jauns pieteikums</a>

<h2>Pieteikumi</h2>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div>
@foreach ($pieteikumi as $pieteikums)
    <br>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $pieteikums->PieteikumsID }}</h5>
            <p class="card-text"><strong>Dalībnieks:</strong> {{ $pieteikums->DalibnieksID}}</p>
            <p class="card-text"><strong>Nodarbība:</strong> {{ $pieteikums->NodarbibasID}}</p>
            <p class="card-text"><strong>Pieteikšanās datums:</strong> {{ $pieteikums->PieteiksanasDatums }}</p>
            <p class="card-text"><strong>Statuss:</strong> {{ $pieteikums->Statuss }}</p>
            <a href="/pieteikumi/{{ $pieteikums->PieteikumsID }}/delete" class="btn btn-danger btn-sm">Dzēst</a>
            <a href="/pieteikumi/{{ $pieteikums->PieteikumsID }}/edit" class="btn btn-warning btn-sm">Rediģēt</a>
        </div>
    </div>
@endforeach
</div>

@endsection