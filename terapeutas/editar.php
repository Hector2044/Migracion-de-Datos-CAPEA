<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>editar</title>
</head>
<body>

<?php

    $Nombre = $_GET['Nombre'];
    $Grupo = $_GET['Grupo'];
    $Hora = $_GET['Hora'];
    $id = $_GET['id'];
?>

<div id="adorno">
    <a class="LinkBorder" href="#">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <label class="etiqueta" for="">Administrador</label>
      </a>
    <a class="LinkBorder" href="#">
    <i class="fa fa-user-circle" aria-hidden="true"></i>
    <label class="etiqueta" for="">Terapeutas</label>
      </a>
   <a class="LinkBorder" href="#">
  <i class="fa fa-calendar" aria-hidden="true"></i>
  <label class="etiqueta" for="">Calendario</label>
    </a>
   <a class="LinkBorder" href="#">
  <i class="fa fa-child" aria-hidden="true"></i>
  <label class="etiqueta" for="">Archivos</label>
</a>
<a class="LinkBorder" href="#">
  <i class="fa fa-file" aria-hidden="true"></i>
  <label class="etiqueta" for="">Expediente</label>
</a>
</div>
    <div>
        <form action="p_editar.php" method="post"> 

        <table>
        <tr> <td> Ingresar Datos </td> 
    </tr>  
    <tr>   
                <td> Id </td>
                <td> <input type = "text" name="id" value="<?=$id?>"></td> 
            </tr> 
            <tr>   
                <td> Nombre Completo: </td>
                <td> <input type = "text" name="Nombre" value="<?=$Nombre?>"></td> 
            </tr>  
            <tr> 
                <td> Grupo</td> 
                <td> <input type = "text" name="Grupo" value="<?=$Grupo?>"></td> 
             </tr>
            <tr> <td> Horario</td>
            <td> <input type = "text" name="Hora" value="<?=$Hora?>" ></td>  
        
            </tr>

            <td> <input type="submit"  value="Actualizar"  class="botonesTe" > </td>
                <td> <a href="index.php" class="linkadd" > Cancelar </a> </td>   
            </table>
            

                   
        </form>
    </div>
</body>
</html>