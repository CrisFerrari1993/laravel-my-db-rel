@extends('layouts.main-layout')
@section('head')
    <title>Projects</title>
@endsection
@section('content')
    <h1>Projects: {{count($projects)}}</h1>
    <div class="container">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-sm-12 col-md-6 col-xl-3 border rounded p-3">
                    <div class="container">
                        <img src="{{$project->img_url}}" alt="{{$project->title}}">
                        <h4><strong>Title: </strong>{{$project->title}}</h4>
                        <p><strong>Description: </strong>{{$project->description}}</p>
                        <span><strong>Creation date: </strong>{{$project->creation_date}}</span>
                        <span><strong>Status: </strong>{{$project->status}}</span>
                        <h5 class="mt-2 mb-2"><strong>Stack Development: </strong>{{$project->type->stack_development}}</h5>
                        <span><strong>Project Type: </strong>{{$project->type->project_type}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
