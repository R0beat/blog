@extends('layouts.layout')
@section('title','Contact')

@section('content')
	<h1>Contact</h1>
	<form method="POST" action="{{ route('contact') }}">
		@csrf
		<input name="name" placeholder="Nombre...." value="{{ old('name') }}"><br>
		<p>{{ $errors->first('name') }}</p>
		<input name="email" type="email" placeholder="Email...." value="{{ old('email') }}"><br>
		<p>{{ $errors->first('email') }}</p>
		<input name="subject" placeholder="Asunto...." value="{{ old('subject') }}"><br>
		<p>{{ $errors->first('subject') }}</p>
		<textarea name="content" placeholder="Mensaje..." value="{{ old('content') }}"></textarea><br>
		<p>{{ $errors->first('content') }}</p>
		<button>Enviar</button>
	</form>
@endsection
