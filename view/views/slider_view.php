<?php
 	session_start();
  $idUsuario = $_SESSION['idUsuario'];
  $nombreApellido = $_SESSION['nombreApellido'];
  $idRol = $_SESSION['idRol'];
  $rol = $_SESSION['rol'];
  if (isset($idUsuario)) {
    if ($rol != "Administrador") {
      header("Location: ../../model/cerrarSesion_model.php");
    }
  }else{
    header("Location: ../../model/cerrarSesion_model.php");
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <link rel="stylesheet" href="../css/globalstyles.css">
    <link rel="stylesheet" href="../css/productstyles.css">
    <link rel="stylesheet" href="../css/styles_slider.css">
    <title></title>
  </head>
  <body>
    <div class="main">
      <div class="container-slider">

      </div>
    </div>
    </div>
  </body>
  </html>
