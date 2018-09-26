<?php
  session_start();
  $rol = $_SESSION['rol'];
  if (isset($rol)) {
    if ($rol == "Administrador") {

    }else {
      header("Location: ../../model/cerrarSesion_model.php");
    }
  }else {
    header("Location: ../../model/cerrarSesion_model.php");
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/globalstyles.css">
<link rel="stylesheet" href="../css/productosstyles.css">
  <head>
    <meta charset="utf-8">
    <title>Productos</title>
  </head>
  <body>
    <div class="main">
    <nav class="contenedorbto">
      <ul>
        <li class="items"><svg class="fas fa-plus"><span>Igresar Nuevo Producto</samp></li>
        <li class="items a"><svg class="fas fa-filter"></svg><span>Filtrar Por:</samp>
          <ul class="consubitems">
            <li class="sub-items"><svg class="fas fa-layer-group"></svg><span>Categoria</span></li>
            <li class="sub-items"><svg class="fas fa-money-bill-alt"></svg>Presio</li>
            <li class="sub-items"><svg class="fas fa-luggage-cart"></svg>Unidades en Inventario</samp></li>
          </ul>
        </li>
        <li class="items"><svg class="fas fa-table"></svg><span>Tabla Total De Productos</samp></li>
      </ul>
    </nav>
    <iframe src="formularios/forregitroproductos.php" width="" height=""></iframe>
        </div>
  </body>
</html>
