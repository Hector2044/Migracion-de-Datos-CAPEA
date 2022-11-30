<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Archivos</title>
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

<a href="/Proyecto/registrar/index.php">
    <button class="botonesOrden">Registrar alumno</button>
</a>

<div class="form">
    <script>
        function cambiarOrden(tipo) {
            window.location.href = '?ordenar=' + tipo
        }
    </script>
    <h2 id="centrado">Archivos de alumnos</h2>

    <div class="ordenar">
        <button class="botonesArchivo" onclick="cambiarOrden('Nombre')">Ordenar por Nombre
        </button>
        <button class="botonesArchivo" onclick="cambiarOrden('Grupo')">Ordenar por Grupo</button>
    </div>
	<?php
	include('obtenerAlumnos.php');

	foreach ($resultado as $alumno) { ?>
        <div class="botones">
            <label for="nombre">Nombre: <?php echo $alumno['Nombre']; ?></label>
            <a href="/Proyecto/modificar/index.php?id=<?php echo $alumno['Clave'] ?>" class="botonesArchivo button">Modificar</a>

            <form action="eliminar.php">
                <button type="submit" class="botonesArchivo" name="id" value="<?php echo $alumno['Clave'] ?>">Eliminar
                </button>
            </form>

            <form action="archivar.php" method="POST">
                <button type="submit" class="botonesArchivo" name="id" value="<?php echo $alumno['Clave'] ?>">Archivar
                </button>
            </form>
        </div>
        <label for="grupo"> Grupo: <?php echo $alumno['Grupo'] ?></label>
		<?php
	} ?>

</div>
</body>
</html>