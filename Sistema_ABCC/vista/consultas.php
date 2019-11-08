<!DOCTYPE html>
<html>
<head>
	<title>Consultas</title>
</head>
<body>
	<?php 
	include_once('../vista/menu_principal.php');
	 ?>

	<h3>Consultas</h3>
	<form method="POST" action="../scripts_php/procesar_consulta.php">
		<label>Num Control</label>
		<input type="text" class="form-control" name="num_control">
		<input type="radio" name="radio" value="nc">
		<br>
		<label>Nombre</label>
		<input type="text" class="form-control" name="nombre">
		<input type="radio" name="radio" value="n">
		<br>
		<label>Primer Apellido</label>
		<input type="text" class="form-control" name="primer_ape">
		<input type="radio" name="radio" value="pa">
		<br>
		<label>Segundo Apellido</label>
		<input type="text" class="form-control" name="segundo_ape">
		<input type="radio" name="radio" value="sa">
		<br>
		<label>Edad</label>
		<input type="text" class="form-control" name="edad">
		<input type="radio" name="radio" value="e">
		<br>
		<label>Semestre</label>
		<input type="text" class="form-control" name="semestre">
		<input type="radio" name="radio" value="s">
		<br>
		<label>Carrera</label>
		<input type="text" class="form-control" name="carrera">
		<input type="radio" name="radio" value="c">
		<br>
		<input type="submit" class="btn btn-primary" name="">
	</form>
		
</body>
</html>