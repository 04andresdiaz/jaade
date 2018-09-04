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
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/globalstyles.css">
    <link rel="stylesheet" href="../css/homestyles.css">
    <title>Inicio</title>
  </head>
  <body>
    <header>
      <a href="#"><p class="title">ConivJAADE</p></a>
    </header>
    <div class="main">
      <div class="menumain">
        <div class="profile">
          <img src="../img/user-icon.svg" alt="">
          <p>  <?php echo $nombreApellido; ?> </p>
        </div>
        <nav class="menu">
          <ul>
            <li><svg class="fas fa-cogs"></svg><span>Administrar</span></li>
            <li><svg class="fas fa-chart-line"></svg><span>Contabilidad</span></li>
            <li><svg class="fas fa-dolly"></svg><span>Productos</span></li>
            <li><svg class="fas fa-cart-arrow-down"></svg><span>Pedidos</span></li>
            <li><svg class="fas fa-money-bill-alt"></svg><span>Ventas</span></li>
            <li><svg class="fas fa-database"></svg><span>Backups</span></li>
            <a href="../../model/cerrarSesion_model.php"><li><svg class="fas fa-sign-out-alt"></svg><span>Cerrar Seion</span></li></a>
          </ul>
        </nav>
      </div>
      <div class="vistamodulos">
        <iframe src="productos_view.php" frameborder="0"></iframe>
      </div>
    </div>
  </body>
</html>
