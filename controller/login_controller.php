<?php
    $usuario = $_POST['usuario'];
    $contrasena =   $_POST['contrasena'];
    $rol = $_POST['rol'];
    require_once("../model/login_model.php");
    $obj = new Consulat_model();
    $obj->get_consulta($usuario, $contrasena, $rol);
?>
