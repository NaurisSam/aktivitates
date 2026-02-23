@extends('layouts.app')

@section('content')

<a href="/nodarbibas/create" class="btn btn-primary">Jauna nodarbība</a>

<h2>Nodarbības</h2>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div>
@foreach ($nodarbibas as $nodarbiba)
    <br>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $nodarbiba->NodarbibasID }}</h5>
            <p class="card-text"><strong>Aktivitāte:</strong> {{ $nodarbiba->AktivitatesID}}</p>
            <p class="card-text"><strong>Vadītājs:</strong> {{ $nodarbiba->VaditajsID}}</p>
            <p class="card-text"><strong>Diena:</strong> {{ $nodarbiba->Diena }}</p>
            <p class="card-text"><strong>Laiks:</strong> {{ $nodarbiba->SakumaLaiks }} - {{ $nodarbiba->BeiguLaiks }}</p>
            <p class="card-text"><strong>Telpa:</strong> {{ $nodarbiba->Telpa }}</p>
            <p class="card-text"><strong>Mācību gads:</strong> {{ $nodarbiba->MacibuGads }}</p>
            <a href="/nodarbibas/{{ $nodarbiba->NodarbibasID }}/delete" class="btn btn-danger btn-sm">Dzēst</a>
            <a href="/nodarbibas/{{ $nodarbiba->NodarbibasID }}/edit" class="btn btn-warning btn-sm">Rediģēt</a>
        </div>
    </div>
@endforeach
</div>

@endsection