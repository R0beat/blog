@extends('layouts.layout')

@section('title','Home')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<h1 class="display-4 text-primary">@lang('Web Development')</h1>
				<p class="lead text-secondary">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, magnam provident facilis qui, accusantium molestiae, recusandae ipsa corrupti molestias totam excepturi illo atque amet quas expedita, hic nihil ut consequatur.
				</p>
				<a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">@lang('Contact me')</a>
				<a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}">@lang('Portfolio')</a>
			</div>
			<div class="col-12 col-lg-6">
				<img class="img-fluid mb-4" src="{{  asset('img/financial.svg')  }}" alt="">
			</div>
			
		</div>
	</div>
@endsection
