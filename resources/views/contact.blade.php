@extends('layouts.layout')
@section('title','Contact')

@section('content')
	<h1>@lang('Contact')</h1>
	<form method="POST" action="{{ route('contact') }}">
		@csrf
		<input name="name" placeholder="@lang('Name')" value="{{ old('name') }}"><br>
		<p>{{ $errors->first('name') }}</p>
		<input name="email"  placeholder="@lang('Email')" value="{{ old('email') }}"><br>
		<p>{{ $errors->first('email') }}</p>
		<input name="subject" placeholder="@lang('Subject')" value="{{ old('subject') }}"><br>
		<p>{{ $errors->first('subject') }}</p>
		<textarea name="content" placeholder="@lang('Message')" value="{{ old('content') }}"></textarea><br>
		<p>{{ $errors->first('content') }}</p>
		<button>Enviar</button>
	</form>
@endsection
