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
 $foto= $_POST["foto"];
 
 $insertar="INSERT INTO alumnos (Nombre, Edad, Fecha, Tutor, Domicilio, 
 Telefono, Grupo, Terapeuta, Psicologo_o_Neurologo, Medicamentos, 
 Asistencia, Activo, Imagen) VALUES ('roberto', '23', '5/4/3','ray',
 'SLP slp','123232','s3','Roberta','Robertiño','Robertamol','Miercoles y jueves','1','asdasdsad');";

  mysqli_query($conexion, $insertar);
 
 header("Location: ../index.php?registro=correcto");
?>