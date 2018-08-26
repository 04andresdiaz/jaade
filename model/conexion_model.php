<?php
  
  class Conectar_model{
    public static function conexion(){
      try {
        $conexion = new mysqli("localhost", "root", "",  "jaadeinventario");
      } catch (Exception $e) {
          die("Error ". $e->getMessage());
      }
      return $conexion;
    }
  }
 ?>
