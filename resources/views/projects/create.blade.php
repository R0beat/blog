@extends('layouts.layout')
@section('title','Crear')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				@include('partials.validation-errors')
			<form class="bg-white shadow rounded py-3 px-3" action="{{route('projects.store')}}" method="POST">
				<h1 class="display-4">Nuevo proyecto</h1>
			    @include('projects._form',['btnText'=>'Save'])
			</form>  
		</div>
	</div>
</div>

<a href="{{route('projects.index')}}">Regresar</a>
@endsection
