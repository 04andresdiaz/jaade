<?php
 	session_start();
  $id = $_SESSION['idUsuario'];
  $nombre = $_SESSION['nombre'];
  $rol = $_SESSION['rol'];
  $nombreUsuario = $_SESSION['nombreUsuario'];
 	if (isset($id)) {

  }else{
    header("Location: ../model/cerrarSesion_model.php");
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/globalstyles.css">
    <link rel="stylesheet" href="../css/homestyles.css">
    <title></title>
  </head>
  <body>
    
  </body>
</html>
