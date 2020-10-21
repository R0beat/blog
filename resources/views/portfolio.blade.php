@extends('layouts.layout')
@section('title','Portfolio')

@section('content')
@lang('Portfolio')

<ul>

	@forelse($portfolio as $portfolioItem)
		<li>{{ $portfolioItem['title'] }}</li>
		@empty
		<li>No hay elementos para mostrar</li>
	@endforelse
</ul>
@endsection
