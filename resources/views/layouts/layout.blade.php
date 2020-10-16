<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/portfolio">Portfolio</a></li>
			<li><a href="/contact">Contact</a></li>
		</ul>
	</nav>
	<h1>Home</h1>
	<!--<h2>Bienvenid@  echo $nombre; ?> </h2> -->
	<h2> Bienvenid@  @php echo $nombre ?? "Invitado" @endphp </h2>
	<h2> Bienvenid@  {{ $nombre ?? "Invitado" }} </h2> <!-- Previene la inyección de Scripts-->
	@yield('content')
</body>
</html>