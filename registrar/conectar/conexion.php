<?php

 $host="localhost";
 $user="root";
 $pass="admin1*";
 $bd="migracion";

 $conexion=mysqli_connect($host, $user, $pass, $bd);
 mysqli_set_charset($conexion,"utf8");

 if($conexion->connect_error){
    die("Error al conectar".$conexion->connect_error);
 }

?>