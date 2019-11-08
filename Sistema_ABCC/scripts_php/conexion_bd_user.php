<?php 
class ConexionBD {
	private $con;
	private $host="localhost";
	private $usuario = "root";
	private $contraseña = "1234";
	private $bd = "usuarios_escuela_web";

	public function __construct(){
		$this->con = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);

		if ($this->con) {
			echo "Conexion Establecida<br>";
		}else{
			die("Fallo Conexion".mysqli_error());
		}
	}

	public function getConexion(){
		return $this->con;
	}

}
 ?>
