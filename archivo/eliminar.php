<?php

include_once './conectar/conexion.php';

$id = $_GET['id'];

$query = "DELETE FROM alumnos WHERE Clave = '$id'";

mysqli_query($conexion, $query);

header("Location: index.php");

?>