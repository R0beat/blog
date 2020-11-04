@extends('layouts.layout')
@section('title','Portfolio')

@section('content')
@lang('Portfolio')

<ul>

	@forelse($project as $projectItem)
	  <li>{{ $projectItem->title }}<small>{{$projectItem->description }}</small> </li>
		@empty
		<li>No hay elementos para mostrar</li>

	@endforelse
	{{$project->links() }}
</ul>
@endsection
