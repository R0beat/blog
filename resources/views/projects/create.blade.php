@extends('layouts.layout')
@section('title','Crear')
@section('content')
  <form action="{{route('projects.store')}}" method="POST">
    @csrf
    <label for="">
      Titulo del proyecto <br> 
      <input type="text" name="title">
    </label> 
    <br>
    <label for="">
      Url del proyecto <br>
      <input type="text" name="url">
    </label> 
    <br>
    <label for="">
      Descripción del proyecto <br>
    <input type="text" name="description">
    </label>
    <br>
    <button>@lang('Submit')</button>
  </form>
  <a href="{{route('projects.index')}}">Regresar</a>
@endsection
