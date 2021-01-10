<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('./css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('./css/app.css') }}">
	<script src="{{ asset('./js/app.js') }}" ></script>
	<script src="{{ asset('./js/1351.js') }}" ></script>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials.session-status')	
		</header>
		<main class="py-4">
			@yield('content')
		</main>
		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{ config('app.name')}} | Copyrigth @ {{ date('Y') }}
		</footer>
	</div>
</body>
</html>
