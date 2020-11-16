<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<style>
		.active a{
			color: red !important;
			text-decoration: none !important;
		}
	</style>
</head>
<body>
	@include('partials.nav')
	@yield('content')
	@include('partials.session-status')

</body>
</html>