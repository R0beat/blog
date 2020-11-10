@extends('layouts.layout' )
@section('title','Projects')
@section('content')
  @lang('Portfolio')<br>
<a href="{{route('projects.create')}}">Crear Nuevo Proyecto</a>
<ul>

	@forelse($project as $projects)
	  <li><a href="{{route('projects.show',$projects)}}">{{$projects->title}}</a></li>
		@empty
		<li>No hay elementos para mostrar</li>

	@endforelse
	{{$project->links() }}
</ul>
@endsection
