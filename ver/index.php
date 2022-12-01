<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Modificación</title>
</head>
<body>

<div id="adorno">
    <a href="/Proyecto/login/index.php">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <label class="etiqueta" for="">Administrador</label>
    </a>
    <a href="/Proyecto/terapeutas/index.php">
        <i class="fa fa-user-circle" aria-hidden="true"></i>
        <label class="etiqueta" for="">Terapeutas</label>
    </a>
    <a href="/Proyecto/calendario/index.php">
        <i class="fa fa-calendar" aria-hidden="true"></i>
        <label class="etiqueta" for="">Calendario</label>
    </a>
    <a href="/Proyecto/archivo/index.php">
        <i class="fa fa-child" aria-hidden="true"></i>
        <label class="etiqueta" for="">Archivos</label>
    </a>
    <a href="/Proyecto/expediente/index.php">
        <i class="fa fa-file" aria-hidden="true"></i>
        <label class="etiqueta" for="">Expediente</label>
    </a>

</div>

<?php
$id = $_GET['id'];
$alumno = include "obtenerAlumno.php";
?>

<form method="POST">
    <h2>Ver alumno</h2>

    <div id="avatar">
        <input type="image" src="avatar.png" alt="imagen" width="100px" height="100px">
    </div>
    <label for="user"> Nombre completo: </label>
    <span><?php echo $alumno['Nombre'] ?></span>
    <br>
    <label for="edad"> Edad: </label>
    <span><?php echo $alumno['Edad'] ?></span>
    <br>
    <label for="fecha"> Fecha de nacimiento: </label>
    <span><?php echo $alumno['Fecha'] ?></span>
    <br>
    <label for="tutor"> Padre o Tutor: </label>
    <span><?php echo $alumno['Tutor'] ?></span>
    <br>
    <label for="direccion"> Dirección: </label>
    <span><?php echo $alumno['Domicilio'] ?></span>
    <br>
    <label for="tel"> Teléfono de contacto: </label>
    <span><?php echo $alumno['Telefono'] ?></span>
    <br>
    <label for="terapeuta"> Terapeuta a cargo: </label>
    <span><?php echo $alumno['Terapeuta'] ?></span>
    <br>
    <label for="doctor"> Psiquiatra o neurólogo: </label>
    <span><?php echo $alumno['Psicologo_o_Neurologo'] ?></span>
    <br>
    <label for="med"> Medicamentos: </label>
    <span><?php echo $alumno['Medicamentos'] ?></span>
    <br>
    <label for="grupo"> Grupo: </label>
    <span><?php echo $alumno['Grupo'] ?></span>
    <br>
    <label for="grupo"> Asistencia: </label>
    <span><?php echo $alumno['Asistencia'] ?></span>
    <br>
    <label for="grupo"> Activo: </label>
    <span><?php echo $alumno['Activo'] ?></span>
    <br>
</form>
</body>
</html>