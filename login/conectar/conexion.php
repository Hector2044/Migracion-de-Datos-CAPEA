<?php

 $host="localhost:3307";
 $user="root";
 $pass="";
 $bd="migracion";

 $conexion=mysqli_connect($host, $user, $pass, $bd);

 if($conexion->connect_error){
    die("Error al conectar".$conexion->connect_error);
 }

?>