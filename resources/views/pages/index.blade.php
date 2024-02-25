@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Types</h1>
    <div class="container">
        <div class="row">
            @foreach ($types as $type)
            <div class="col-sm-12 col-sm-6 col-xl-3">
                <div class="container">
                    <img src="{{ $type->icon }}" class="img-fluid rounded-start" alt="...">
                    <h5 class="card-title">Nome del tipo: {{ $type->name }}</h5>
                    <p class="card-text">Descrizione del tipo: {{ $type->description }}</p>
                        @foreach ($type->projects as $project)
                            <p class="card-text"><small class="text-muted">Titolo del progetto:
                                    {{ $project->title }}</small>
                            </p>
                        @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
