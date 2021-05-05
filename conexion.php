<?php
  $conexion=new mysqli("localhost","root","root","productos");
  if($conexion->connect_error){
      die("Error en conexion: ".$conexion->connect_error);
  }
?>
