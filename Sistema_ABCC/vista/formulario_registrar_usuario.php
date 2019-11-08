<!DOCTYPE html>
<html>
<head>
	<title>Registrar Usuario</title>
</head>
<body>
	<form method="POST" action="../scripts_php/procesar_alta_usuario.php">
		<label>Crea Un Usuario</label>
		<br>
		<label>Usuario</label>
		<input type="text"  name="caj_usuario" id="caj_usuario">
		<br>
		<label>Contraseña</label>
		<input type="text" name="caj_contrasena" id="caj_contrasena">
		<br>
		<input type="submit" class="btn btn-outline-primary"><i class="fas fa-sign-in-alt"></i>
	</form>

</body>
</html>