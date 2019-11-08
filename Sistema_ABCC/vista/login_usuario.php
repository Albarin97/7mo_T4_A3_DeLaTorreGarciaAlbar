<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form method ="POST" action="..//scripts_php/validar_usuario.php">
		<label>Usuario: </label>
		<input type="text" name="caja_usuario" required>
		<br>

		<label>Contraseña:</label>
		<input type="password" name="caja_contraseña" required>
		<br>
		<label>No cuentas con un usuario? Registrate dando clilc </label><a href="formulario_registrar_usuario.php">aqui</a>
		<br>
		<input type="submit" name="">
	</form>

</body>
</html>