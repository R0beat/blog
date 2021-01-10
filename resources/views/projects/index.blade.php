@extends('layouts.layout' )
@section('title','Projects')
@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<h1 class="display-4 mb-0">@lang('Projects')</h1>
			@auth
				<a class="btn btn-primary" href="{{route('projects.create')}}">@lang('New Project') <i class="fad fa-plus"></i></a>
			@endauth
		</div>
		
		<p class="lead text-secondary">Proyectos realizados Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio tempore expedita ex nulla fuga asperiores, sapiente porro explicabo quod. Soluta ut quibusdam illo, sunt qui dignissimos tempora aperiam rem facere.</p>
		
		<ul class="list-group">

			@forelse($project as $projects)
			  <li class="list-group-item border-0 mb-3 shadow-sm">
			  	<a class="d-flex justify-content-between align-items-center" href="{{route('projects.show',$projects)}}">
			  		<span class="text-secondary font-weigth-bold">
			  			{{$projects->title}}
			  		</span>
			  		<span class="text-black-50">
			  			{{$projects->created_at->format('d/m/Y')}}
			  		</span>
			  	</a>
			  </li>
				@empty
				<li class="list-group-item border-0 mb-3 shadow-sm">
					No hay elementos para mostrar
				</li>

			@endforelse
			{{$project->links() }}
		</ul>
	</div>
@endsection
