<?php
  class Consulat_model{
    function get_consulta($usuario, $contrasena, $rol){
      require_once("conexion_model.php");
      $obj = Conectar_model::conexion();
      $con = $obj->query("SELECT usuarios.*, usuario_roles.*, roles.*
      FROM usuarios INNER JOIN usuario_roles ON
      usuarios.id = usuario_roles.id_Usuarios INNER JOIN roles ON
      roles.id = usuario_roles.id_Roles WHERE
      usuarios.NombreUsuario = '$usuario' AND usuarios.Contrasena = '$contrasena' AND roles.id = '$rol' ");
      if ($res = mysqli_fetch_array($con)) {
        session_start();
        $_SESSION['idUsuario'] = $res[0];
        $_SESSION['nombreApellido'] = $res[1];
        $_SESSION['idRol'] = $res[7];
        $_SESSION['rol'] = $res[8];
        echo 1;
      }else {
        echo 2;
      }
    }
  }
?>
