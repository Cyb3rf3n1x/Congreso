<?php
	echo "Equipo-1";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta type="author" content="Héctor Sánchez Tamayo">
	<title>Formulario de prueba</title>
	<script src="js/jquery/jquery-3.4.1.js"></script>
	<script src="js/jquery/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/abc.css">
</head>
<body>
	<header>BIENVENIDO</header>
	<section>
			<input type="text" id="user" name="user" required>
			<input type="password" id="pass" name="pass" required>
			<input type="button" name="Enviar" Value="Entrar" id="log">
			<input type="button" name="registrar" Value="Registrarse" id="reg">
			<span id="logText"></span>
	</section>
	<footer>Derechos Reservados <sup>&copy;</sup></footer>
</body>
</html>
<script src="js/login.js"></script>