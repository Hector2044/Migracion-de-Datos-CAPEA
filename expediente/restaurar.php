<?php

include_once './conectar/conexion.php';

$id = $_POST['id'];

$query = "UPDATE alumnos  SET Activo = true WHERE Clave = '$id'";

mysqli_query($conexion, $query);

header("Location: /Proyecto/expediente/index.php");