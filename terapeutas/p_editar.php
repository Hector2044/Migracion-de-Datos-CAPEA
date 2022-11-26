<?php
    include_once './conectar/conexion.php';

    $Nombre = $_POST['Nombre'];
    $Grupo = $_POST['Grupo'];
    $Hora = $_POST['Hora'];
    $id = $_POST['id'];

    $conexion = mysqli_connect("$host", "$user", "$pass", "$bd");
    $sql = "UPDATE terapeuta set id = '$id',  Nombre = '$Nombre', Grupo='$Grupo', Hora='$Hora' WHERE id = '$id'";


    $query = mysqli_query($conexion, $sql);

if(!$query){
    echo "No se Actualizo";
}
else{
    header("Location: index.php");
}

?>