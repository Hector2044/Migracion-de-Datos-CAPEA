<?php
    include_once './conectar/conexion.php';

    $q = "SELECT * FROM terapeuta ";

    $query = mysqli_query($conexion, $q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Terapeutas</title>
</head>
<body>
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
   <a  class="LinkBorder" href="#">
  <i class="fa fa-child" aria-hidden="true"></i>
  <label class="etiqueta" for="">Archivos</label>
</a>
<a class="LinkBorder" href="#">
  <i class="fa fa-file" aria-hidden="true"></i>
  <label class="etiqueta" for="">Expediente</label>
</a>

    </div>

    <div class="tablabuscar">
  <form action="buscar.php" method="post"> 
    <input type="text" name = "buscar" id="">
    <input type = "submit" value="Buscar" class = "botonesTe" >
  </form>

    
</div>

<form action="">
<table class="tabladatos">
        <tr>
            <th>id</th>
            <th> Nombre</th>
            <th> Grupo </th>
            <th> Hora </th>
            <th>  Opciones </th>
            
        </tr>   
        <?php
          
             while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
            <td> <?php echo $row ['id'] ?> </td>  

                <td> <?php echo $row ['Nombre'] ?> </td>  

                <td><?php echo $row ['Grupo'] ?></td>  
                <td><?php echo $row ['Hora'] ?></td>  

                <td> 

                
                    <a class="LinkAct" href="editar.php?
                    id=<?php echo $row ['id'] ?> &
                    Nombre=<?php echo $row ['Nombre'] ?> &
                    Grupo=<?php echo $row ['Grupo'] ?> &
                    Hora=<?php echo $row ['Hora'] ?>">Editar</a>


                    <a class="LinkAct" href="p_eliminar.php? id=<?php echo $row ['id'] ?>"> Eliminar </a>
                </td>
                
            </tr>
            <?php
             }
        ?>
  </table>
  <br>
  
    <a  href="nuevo.php" class = "botonesTe"> Agregar nuevo </a>
    
  </form>
</body>
</html>