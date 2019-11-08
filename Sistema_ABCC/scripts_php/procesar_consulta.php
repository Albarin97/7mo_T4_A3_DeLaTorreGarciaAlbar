 <!DOCTYPE html>
 <html>
 <head>
 	<title>Consulta</title>
 </head>
 <body>
 	<?php 
	include_once('../vista/menu_principal.php');
	 ?>

 	<h1>Resultados De Tu Consulta</h1>
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>Num Control</th>
			<th>Nombre</th>
			<th>Primer Ape</th>
			<th>Segundo Ape</th>
			<th>Edad</th>
			<th>Semestre</th>
			<th>Carrera</th>

			<?php 
			include("../scripts_php/conexion_bd.php");
			$conexion = new ConexionBD();
			if ($_POST['radio']=="nc") {
				$x = $_POST['num_control'];
				$sql = "SELECT * FROM Alumnos WHERE Num_Control = '$x'";
			}
			if ($_POST['radio']=="n") {
				$x = $_POST['nombre'];
				$sql = "SELECT * FROM Alumnos WHERE Nombre_Alumno = '$x'";
			}
			if ($_POST['radio']=="pa") {
				$x = $_POST['primer_ape'];
				$sql = "SELECT * FROM Alumnos WHERE Primer_Ape = '$x'";
			}
			if ($_POST['radio']=="sa") {
				$x = $_POST['segundo_ape'];
				$sql = "SELECT * FROM Alumnos WHERE Segundo_Ape = '$x'";
			}
			if ($_POST['radio']=="e") {
				$x = $_POST['edad'];
				$sql = "SELECT * FROM Alumnos WHERE Edad = '$x'";
			}
			if ($_POST['radio']=="s") {
				$x = $_POST['semestre'];
				$sql = "SELECT * FROM Alumnos WHERE Semestre = '$x'";
			}
			if ($_POST['radio']=="c") {
				$x = $_POST['carrera'];
				$sql = "SELECT * FROM Alumnos WHERE Carrera = '$x'";
			}
			


			$res = mysqli_query($conexion->getConexion(), $sql);

			if(mysqli_num_rows($res)>0) {
				while ($fila=mysqli_fetch_assoc($res)){
					printf("<tr><td>".$fila['Num_Control']."</td>".
						"<td>".$fila['Nombre_Alumno']."</td>".
						"<td>".$fila['Primer_Ape']."</td>".
						"<td>".$fila['Segundo_Ape']."</td>".
						"<td>".$fila['Edad']."</td>".
						"<td>".$fila['Semestre']."</td>".
						"<td>".$fila['Carrera']."</td>"
				);
				}
			}
			?>
		</tr>
		</thead>
	</table>
	
 </body>
 </html>