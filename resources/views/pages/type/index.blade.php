@extends('layouts.main-layout')
@section('head')
    <title>Types</title>
@endsection
@section('content')
    <h1>Types</h1>
    <div class="container">
        <div class="row">
            @foreach ($types as $type)
                <div class="col-sm-12 col-md-6 col-xl-3 border rounded ">
                    <div class="container">
                        <h4><strong>Type Stack development: </strong>{{$type->stack_development}}</h4>
                        <span class="d-block"><strong>Project type: </strong>{{$type->project_type}}</span>
                        <h6><strong>Project associated: </strong>{{count($type->projects)}}</h6>
                        <div class="row">
                                @foreach ($type->projects as $project)
                                    <div class="col-sm-6">
                                        <img src="{{$project->img_url}}" alt="{{$project->title}}">
                                        <span><strong>Project Name: </strong>{{$project->title}}</span>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
