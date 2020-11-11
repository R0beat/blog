@extends('layouts.layout')
@section('title','Editar')
@section('content')
<h1>@lang('Edit Project')</h1>
  @if($errors ->any())
    <ul>
      @foreach($errors->all() as $error)
	<li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
  <form action="{{route('projects.update',$project)}}" method="POST">
    @csrf @method('PATCH') 
    <label for="">
      Titulo del proyecto <br> 
      <input type="text" name="title" value="{{old('title',$project->title)}}">
    </label> 
    <br>
    <label for="">
      Url del proyecto <br>
      <input type="text" name="url" value="{{ old('url',$project->url) }}">
    </label> 
    <br>
    <label for="">
      Descripción del proyecto <br>
      <input type="text" name="description" value="{{ old('description',$project->description) }}">
    </label>
    <br>
    <button>@lang('Update')</button>
  </form>
  <a href="{{route('projects.index')}}">@lang('Return')</a>
@endsection
