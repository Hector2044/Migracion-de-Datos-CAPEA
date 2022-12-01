<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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

<div class="form">
    <h2 id="centrado">Expedientes de alumnos</h2>
    <script>
        function cambiarOrden(tipo) {
            window.location.href = '?ordenar=' + tipo
        }
    </script>
    <button class="botonesOrden" onclick="cambiarOrden('Nombre')">Ordenar por Nombre</button>
    <button class="botonesOrden" onclick="cambiarOrden('Grupo')">Ordenar por Grupo</button>
    <br>
	<?php

	$resultado = include 'obtenerArchivados.php';
	foreach ($resultado as $archivado) { ?>

        <div class="ordenar">
            <label for="nombre">Nombre: <?php echo $archivado['Nombre']; ?></label>
            <form action="restaurar.php" method="POST">
                <button type="submit" class="botonesArchivo" name="id" value="<?php echo $archivado['Clave'] ?>">
                    Restaurar
                </button>
            </form>
            <a href="/Proyecto/ver/index.php?id=<?php echo $archivado['Clave'] ?>" class="botonesArchivo button">Ver</a>
        </div>
        <label for="grupo"> Grupo: <?php echo $archivado['Grupo']; ?></label>
        <br>
        <br>
		<?php
	} ?>
</div>

</body>
</html>