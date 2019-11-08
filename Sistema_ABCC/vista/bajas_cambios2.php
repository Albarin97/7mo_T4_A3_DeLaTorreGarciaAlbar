<!DOCTYPE html>
<html>
<head>
	<title>Bajas y Cambios</title>
</head>
<body>
	<?php require_once('menu_principal.php'); ?>

	<h1>Bajas y Cambios De Alumnos</h1>
	<table class="table table-bordered">
		<tr>
			<th>Num Control</th>
			<th>Nombre</th>
			<th>Primer Ape</th>
			<th>Segundo Ape</th>
			<th>Edad</th>
			<th>Semestre</th>
			<th>Carrera</th>
			<th>Accion</th>
			<th>Accion</th>
			
			
			<?php 
			include("../scripts_php/conexion_bd.php");
			$conexion = new ConexionBD();
			$sql = "SELECT * FROM Alumnos";

			$res = mysqli_query($conexion->getConexion(), $sql);

			if(mysqli_num_rows($res)>0) {
				while ($fila=mysqli_fetch_assoc($res)){
					printf("<tr><td>".$fila['Num_Control']."</td>".
						"<td>".$fila['Nombre_Alumno']."</td>".
						"<td>".$fila['Primer_Ape']."</td>".
						"<td>".$fila['Segundo_Ape']."</td>".
						"<td>".$fila['Edad']."</td>".
						"<td>".$fila['Semestre']."</td>".
						"<td>".$fila['Carrera']."</td>".
						"<td><a href='../scripts_php/procesar_baja.php?nc=%s'>Editar</td></tr>".
			"<td><a href='../scripts_php/procesar_baja.php?nc=%s'>Eliminar</td></tr>",$fila['Num_Control'],$fila['Num_Control']
				);
				}
			}
			?>
		</tr>
	</table>

	<!------------------------------------------------------------------------->

	<br>
	<br>
	<h3 style="border-bottom: 2px solid black;">Forma 2</h3>

	<tbody>
		<?php 
		include_once('../scripts_php/Alumno_Dao.php');
		$aDao = new AlumnosDAO();

		$listaAlumnos = $aDao->mostrarTodos();
		while ($fila = mysqli_fetch_object($listaAlumnos)) {
			$nc = $fila->Num_Control;
			$nom = $fila->Nombre;
			$ape = $fila->Primer_Ape;
			$ape2 = $fila->Segundo_Ape;
			$e = $fila->Edad;
			$s = $fila->Semestre;
			$c = $fila->Carrera;
		 ?>
		 <tr>
		 	<td><?php echo $nc ?></td>
		 	<td><?php echo $nom ?></td>
		 	<td><?php echo $ape ?></td>
		 	<td><?php echo $ape2 ?></td>
		 	<td><?php echo $e ?></td>
		 	<td><?php echo $s ?></td>
		 	<td><?php echo $c ?></td>

		 	<td style="text_aling: center;">
		 		<a href="..//scripts_php/procesar_baja.php?nc=<?php echo $nc; ?>">
		 			<i class="fa fa_trash" style="font-size: 30px; color: orange;"></i>
		 		</a>
		 	</td>
		 	</tr>
		 <?php }//while ?>	 
	</tbody>
</body>
</html>