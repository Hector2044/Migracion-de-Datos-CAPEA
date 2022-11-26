<?php
     include_once './conectar/conexion.php';

    $id = $_GET['id'];
    $conexion = mysqli_connect("$host", "$user", "$pass", "$bd");
    $sql = "DELETE FROM terapeuta  WHERE id = '$id'";
    $query = mysqli_query($conexion, $sql);

if(!$query){
    echo "No se Elimino";
}
else{
    header("Location: index.php");
}
?>