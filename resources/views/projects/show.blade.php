@extends('layouts.layout')

@section('title',$project->title . null) 
@section('content')
  <h1>{{$project->title}}</h1>
  <p>{{$project->description}}</p>
  <p>{{$project->created_at->diffForHumans()}}</p>
  <a href="{{route('projects.index')}}">Regresar</a>
@endsection










