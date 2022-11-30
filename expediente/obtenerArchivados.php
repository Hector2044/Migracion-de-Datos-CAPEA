<?php

include_once './conectar/conexion.php';

$query = "SELECT Clave, Nombre, Grupo FROM alumnos WHERE Activo = false";

if (isset($_GET['ordenar'])) {
	if ($_GET['ordenar'] == 'Nombre') {
		$query = "SELECT Clave, Nombre, Grupo FROM alumnos WHERE Activo = false ORDER BY Nombre ASC";
	}
	if ($_GET['ordenar'] == 'Grupo') {
		$query = "SELECT Clave, Nombre, Grupo FROM alumnos WHERE Activo = false ORDER BY Grupo";
	}
}

$resultado = mysqli_query($conexion, $query);

return $resultado;