<?php

    $usuario = $_POST['usuario'];
    $contrasena =   $_POST['contrasena'];
    require_once("../model/login_model.php");
    $obj = new Consulat_model();
    $obj->get_consulta($usuario, $contrasena);
?>
