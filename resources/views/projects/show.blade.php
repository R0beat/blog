@extends('layouts.layout')

@section('title',$project->title . null) 
@section('content')
  <h1>{{$project->title}}</h1>
  <a href="{{route('projects.edit',$project)}}">@lang('Edit')</a>
  <form method="POST" action="{{ route('projects.destroy',$project) }}">
  	@csrf @method('DELETE')
  	<button>@lang('Delete')</button>
  </form>
  <p>{{$project->description}}</p>
  <p>{{$project->created_at->diffForHumans()}}</p>
  <a href="{{route('projects.index')}}">@lang('Return')</a>
@endsection










