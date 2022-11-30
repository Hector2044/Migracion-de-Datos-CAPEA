<?php

include_once './conectar/conexion.php';

$id = $_POST['id'];

$query = "UPDATE alumnos a SET Activo = false WHERE a.Clave ='$id'";

mysqli_query($conexion, $query);

header("Location: /Proyecto/expediente/index.php");
?>