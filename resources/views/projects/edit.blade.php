@extends('layouts.layout')
@section('title','Editar')
@section('content')
<h1>@lang('Edit Project')</h1>
  @include('partials.validation-errors')
  <form action="{{route('projects.update',$project)}}" method="POST">
    @method('PATCH') 
    @include('projects._form',['btnText'=>'Update'])
  </form>
  <a href="{{route('projects.index')}}">@lang('Return')</a>
@endsection
