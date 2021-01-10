@extends('layouts.layout')
@section('title','Contact')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<form class="bg-white shadow rounded py-3" method="POST" action="{{ route('contact') }}">
					@csrf
					<div class="container">	
						<h1 class="display-4">@lang('Contact')</h1>	
						<div class="form-group">
							<label for="name">@lang('Nombre')</label>
							<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" 
							name="name" 
							placeholder="@lang('Name')" 
							value="{{ old('name') }}" 
							>
							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="email">@lang('Email')</label>
							<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
							name="email"  
							placeholder="@lang('Email')" 
							value="{{ old('email') }}">
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="subject">@lang('Subject')</label>
							<input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
							name="subject" class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
							placeholder="@lang('Subject')" 
							value="{{ old('subject') }}">
							@error('subject')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="content">@lang('Content')</label>
							<textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
							name="content" 
							placeholder="@lang('Message')" 
							value="{{ old('content') }}"></textarea>
							@error('content')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<button class="btn btn-primary btn-lg btn-block">@lang('Submit')</button>
					</div>
				</form>
			</div>
		</div>
	</div>
		
@endsection
