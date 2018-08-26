<?php
  class Consulat_model{
    function get_consulta($usuario, $contrasena){
      require_once("conexion_model.php");
      $obj = Conectar_model::conexion();
      $con = $obj->query("SELECT * FROM usuarios WHERE nombreUsuario='$usuario' AND contrasena='$contrasena'");
      if ($res = mysqli_fetch_array($con)) {
        session_start();
        $_SESSION['idUsuario'] = $res[0];
        $_SESSION['nombre'] = $res[1];
        $_SESSION['rol'] = $res[2];
        $_SESSION['nombreUsuario'] = $res[3];

        echo 1;
      }
    }
  }

// class Consulta_model{
//     private $db;
//     function __construct(){
//       require_once("conexion_model.php");
//       $this->db=Conectar_model::conexion();
//     }
//     function get_Consultausuario($usuario,$contrasena){
//       $consulta= $this->db->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrana'");
//       if ($res = mysqli_fetch_array($consulta)) {
//         echo 1;
//       }else{
//         echo 2;
//       }
//     }
//   }
?>
