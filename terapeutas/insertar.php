<?php
     include_once './conectar/conexion.php';

    $Nombre = $_POST['Nombre'];
    $Grupo = $_POST['Grupo'];
    $Hora = $_POST['Hora'];
    
    $conexion = mysqli_connect("$host", "$user", "$pass", "$bd");
    $sql = "INSERT INTO terapeuta(Nombre, Grupo, Hora) VALUES ('$Nombre', '$Grupo', '$Hora')";

 mysqli_query($conexion, $sql);

 header("Location: index.php");


?>