<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Registro Archivos</title>
</head>
<body>  

    <div id="adorno">
        <a href="#">
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

    <form action="conectar/insertar.php" method="POST">
        <h2>Registrar alumno</h2>

        <label for="foto">Añadir foto del alumno: </label>
        <input type="file" name="foto" id="Foto">

        <div id="avatar">
        <input type="image" src="avatar.png" alt="imagen" width="100px" height="100px"> 
        </div>

        <label  for="user"> Nombre completo: </label>
        <input class="ancho" type="text" name="user" id="Alumno">
        <br>
        <label for="edad"> Edad: </label>
        <input type="number" name="edad" id="Edad">
        <br>
        <label for="fecha"> Fecha de nacimiento: </label>
        <input type="text" name="fecha" id="Fecha">
        <br>
        <label for="tutor"> Padre o Tutor: </label>
        <input class="ancho" type="text" name="tutor" id="Tutor">
        <br>
        <label for="direccion"> Dirección: </label>
        <input class="ancho" type="text" name="direccion" id="Direccion">
        <br>
        <label for="tel"> Teléfono de contacto: </label>
        <input type="text" name="tel" id="Telefono">
        <br>
        <label for="terapeuta"> Terapeuta a cargo: </label>
        <input class="ancho" type="text" name="terapeuta" id="Terapeuta">
        <br>
        <label for="doctor"> Psiquiatra o neurólogo: </label>
        <input class="ancho" type="text" name="doctor" id="Doctor">
        <br>
        <label for="med"> Medicamentos: </label>
        <input class="ancho" type="text" name="med" id="Medicamentos">
        <br>
        <label for="grupo"> Grupo: </label>
        <input  type="text" name="grupo" id="Grupo">
        <br>
        <label for="asistencia"> Asistencia: </label>
        <input  type="text" name="asis" id="asis">
        <br>
        <label for="activo"> Activo: </label>
        <input type="checkbox" name= "activo" id="EsActivo">
        <br>
        <input type="submit" class="button" name="registro" value="Registrarse">
        
      </form> 
    </div>
</body>
</html>