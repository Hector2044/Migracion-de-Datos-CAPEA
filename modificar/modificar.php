<?php
include_once './conectar/conexion.php';

$name = $_POST["user"];
$edad = $_POST["edad"];
$fecha = $_POST["fecha"];
$tutor = $_POST["tutor"];
$direccion = $_POST["direccion"];
$tel = $_POST["tel"];
$terapeuta = $_POST["terapeuta"];
$doctor = $_POST["doctor"];
$med = $_POST["med"];
$grupo = $_POST["grupo"];
$id = $_POST['id'];
$asistencia= $_POST["asis"];
$activo= $_POST["activo"];

$insertar = "UPDATE alumnos SET Nombre = '$name',
                   Edad = '$edad', 
                   Fecha = '$fecha',
                   Tutor = '$tutor',
                   Domicilio = '$direccion',
                   Telefono = '$tel',
                   Terapeuta = '$terapeuta',
                   Psicologo_o_Neurologo = '$doctor',
                   Medicamentos = '$med',
                   Asistencia= '$asistencia',
                   Activo= '$activo', 
                   Grupo = '$grupo' WHERE Clave = $id";

mysqli_query($conexion, $insertar);

header("Location: index.php?id=$id");