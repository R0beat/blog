@extends('layouts.layout' )
@section('title','Projects')
@section('content')
  <h1>@lang('Projects')</h1><br>
<a href="{{route('projects.create')}}">@lang('New Project')</a>
<ul>

	@forelse($project as $projects)
	  <li><a href="{{route('projects.show',$projects)}}">{{$projects->title}}</a></li>
		@empty
		<li>No hay elementos para mostrar</li>

	@endforelse
	{{$project->links() }}
</ul>
@endsection
