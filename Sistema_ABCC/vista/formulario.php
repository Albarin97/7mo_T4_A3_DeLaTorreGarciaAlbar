<?php session_start();
if($_SESSION['autenticado']==false){
	var_dump($_SESSION['autenticado']);
	header("location:login_usuario.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Altas</title>
	
</head>
<body>

	<?php 
	include('menu_principal.php');
	 ?>

	<h3>ALTAS</h3>
	<form method="POST" action="../scripts_php/procesar_altas.php">
		<label>Num Control </label>
		<input type="text" class="form-control" name="num_control">
		<br>
		<label>Nombre</label>
		<input type="text" class="form-control" name="nombre">
		<br>
		<label>Primer Apellido</label>
		<input type="text" class="form-control" name="primer_ape">
		<br>
		<label>Segundo Apellido</label>
		<input type="text" class="form-control" name="segundo_ape">
		<br>
		<label>Edad</label>
		<input type="text" class="form-control" name="edad">
		<br>
		<label>Semestre</label>
		<input type="text" class="form-control" name="semestre">
		<br>
		<label>Carrera</label>
		<input type="text" class="form-control" name="carrera">
		<br>
		


		<input type="submit" class="btn btn-primary">
	</form>
	
</body>
</html>