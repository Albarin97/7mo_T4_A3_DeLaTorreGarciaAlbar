

<?php 
	$conexion = mysqli_connect('localhost:3306', 'root', '1234', 'usuarios_escuela_web');
	if ($conexion) {
		//echo "Conexion establecida.";

		$u = $_POST['caja_usuario'];
		$c = $_POST['caja_contraseña'];

		$u_cifrado = sha1($u);
		$c_cifrado = sha1($c);

		//echo $u_cifrado;
		//echo $c_cifrado;
		//USURAIO - 4 CONTRASEÑA - 3


		$sql = "SELECT * FROM usuarios WHERE nombre_usuario='$u_cifrado' AND contrasena = '$c_cifrado'";

		$res = mysqli_query($conexion, $sql);

		if (mysqli_num_rows($res)==1) {
			//echo "Bienvenido " . $u;
			session_start();
			$_SESSION['autenticado'] = true;
			$_SESSION['usuario'] = $u; //$u_cifrado;
 			header("location:../vista/menu_principal.php");
		}else{
			header("location:../vista/login_usuario.php");
			echo "Acceso denegado";
		}

	}else{
		die("ERROR de conexion" .
		mysqli_connect_error() .
		mysql_connect_errno());
	}
 ?>