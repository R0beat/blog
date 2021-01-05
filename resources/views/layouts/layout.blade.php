<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('./css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('./js/app.js') }}" defer>
</head>
<body>
	@include('partials.nav')
	@yield('content')
	@include('partials.session-status')

</body>
</html>