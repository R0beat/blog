@extends('layouts.layout')
@section('title','Editar')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">	
			@include('partials.validation-errors')
			<form class="bg-white shadow rounded py-3 px-4" action="{{route('projects.update',$project)}}" method="POST">
			    @method('PATCH')
			    <h1 class="display-4">@lang('Edit')</h1>
			    <hr>
			    @include('projects._form',['btnText'=>'Update'])
			    <a class="btn btn-link btn-block btn-outline-primary" href="{{route('projects.index')}}">@lang('Cancel')</a>
			</form>
			

			@endsection
		</div>
	</div>
</div>