@extends('layouts.layout')
@section('title','About')

@section('content')

<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<h1 class="display-4 text-primary">@lang('About')</h1>
				<p class="lead text-secondary">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium iure amet, fugit dolorem, error accusantium saepe. Voluptatibus pariatur quas quia dicta tenetur recusandae tempora dolorem, tempore, ex molestias iure consequatur.
					Officiis impedit nisi reiciendis excepturi repellendus maxime, eos nulla sunt et quos libero repellat alias soluta vitae! Sint iste adipisci, distinctio modi quo amet corrupti minima nihil ex, explicabo nemo.
					Autem officiis aliquam doloribus libero, nihil nesciunt magnam similique delectus, minima! Eaque assumenda at, in dolor tempore aliquam unde quod quasi, quaerat esse voluptas quia ad beatae labore aliquid numquam.
				</p>
				<a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">@lang('Contact me')</a>
				<a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}">@lang('Portfolio')</a>
			</div>
			<div class="col-12 col-lg-6">
				<img class="img-fluid mb-4" src="{{  asset('img/dev.svg')  }}" alt="">
			</div>
			
		</div>
	</div>
@endsection

