<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
	<p>Asunto: {{ $msg['subject'] }}</p>
	<p>Mensaje: {{ $msg['content'] }}</p>
</body>
</html>