<?php

include_once './conectar/conexion.php';

$id = $_GET['id'];

$query = "SELECT * FROM alumnos WHERE Clave = '$id'";

$resultado = mysqli_query($conexion, $query);

return $resultado->fetch_assoc();
?>
