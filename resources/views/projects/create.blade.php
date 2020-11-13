@extends('layouts.layout')
@section('title','Crear')
@section('content')
  @include('partials.validation-errors')
  <form action="{{route('projects.store')}}" method="POST">
    @include('projects._form',['btnText'=>'Save'])
  </form>
  <a href="{{route('projects.index')}}">Regresar</a>
@endsection
