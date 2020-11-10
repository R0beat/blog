@extends('layouts.layout')
@section('title','Crear')
@section('content')
  @if($errors ->any())
    <ul>
      @foreach($errors->all() as $error)
	<li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
  <form action="{{route('projects.store')}}" method="POST">
    @csrf
    <label for="">
      Titulo del proyecto <br> 
      <input type="text" name="title" value="{{old('title')}}">
    </label> 
    <br>
    <label for="">
      Url del proyecto <br>
      <input type="text" name="url" value="{{ old('url') }}">
    </label> 
    <br>
    <label for="">
      Descripción del proyecto <br>
    <input type="text" name="description" value="{{ old('description') }}">
    </label>
    <br>
    <button>@lang('Submit')</button>
  </form>
  <a href="{{route('projects.index')}}">Regresar</a>
@endsection
