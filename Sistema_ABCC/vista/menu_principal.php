<?php session_start();
if($_SESSION['autenticado']==false){
  var_dump($_SESSION['autenticado']);
  header("location:login_usuario.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Sistema ABCC</a>
    </div>
    <ul class="nav navbar-nav">
       <li><a href="../vista/formulario.php">ALTAS</a></li>
        <li><a href="../vista/bajas_cambios.php">BAJAS</a></li>
        <li><a href="../vista/bajas_cambios.php">CAMBIOS</a></li>
        <li><a href="../vista/consultas.php">CONSULTAS</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <!-- <li><a href=""><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
     <!-- <li><a href="login_usuario.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      <li><a href="../scripts_php/cerrar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a></li>
    </ul>
  </div>
</nav>
