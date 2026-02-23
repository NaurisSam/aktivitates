@extends('layouts.app')

@section('content')

<a href="/kategorijas/create" class="btn btn-primary">Jauna kategorija</a>

<h2>Kategorijas</h2>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div>
@foreach ($kategorijas as $kategorija)
    <br>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $kategorija->KategorijasID }}</h5>
            <p class="card-text"><strong>Nosaukums:</strong> {{ $kategorija->Nosaukums }}</p>
            <a href="/kategorijas/{{ $kategorija->KategorijasID }}/delete" class="btn btn-danger btn-sm">Dzēst</a>
            <a href="/kategorijas/{{ $kategorija->KategorijasID }}/edit" class="btn btn-warning btn-sm">Rediģēt</a>
        </div>
    </div>
@endforeach
</div>

@endsection
