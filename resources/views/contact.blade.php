@extends('layouts.layout')
@section('title','Contact')

@section('content')
	<h1>Contact</h1>
	<form method="POST" action="{{ route('contact') }}">
		@csrf
		<input name="name" placeholder="Nombre....">
		<input name="email" type="email" placeholder="Email....">
		<input name="subject" placeholder="Asunto....">
		<textarea name="content" placeholder="Mensaje..."></textarea>
		<button>Enviar</button>
	</form>
@endsection
