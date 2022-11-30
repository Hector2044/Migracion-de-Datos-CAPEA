<?php
  include_once 'conexion.php';

 $name= $_POST["user"];
 $edad= $_POST["edad"];
 $fecha= $_POST["fecha"];
 $tutor= $_POST["tutor"];
 $direccion= $_POST["direccion"];
 $tel= $_POST["tel"];
 $grupo= $_POST["grupo"];
 $terapeuta= $_POST["terapeuta"];
 $doctor= $_POST["doctor"];
 $med= $_POST["med"];
 $asistencia= $_POST["asis"];
 $activo= $_POST["activo"];

  $activo=0;
  if(isset($_POST['activo'])){
    $activo=1;
  }

 $foto= $_POST["foto"];
 
 $insertar="INSERT INTO alumnos (Nombre, Edad, Fecha, Tutor, Domicilio, 
 Telefono, Grupo, Terapeuta, Psicologo_o_Neurologo, Medicamentos, 
 Asistencia, Activo, Imagen) VALUES ('$name', '$edad', '$fecha','$tutor',
 '$direccion','$tel','$grupo','$terapeuta','$doctor','$med','$asistencia','$activo','$foto');";

  mysqli_query($conexion, $insertar);
 
 header("Location: ../index.php?registro=correcto");


?>