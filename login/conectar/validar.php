<?php
  require_once 'conexion.php';
  include "C:/xampp/htdocs/Proyecto/registrar/index.php";
  
  $usuario=$_POST["user"];
  $contraseña=$_POST["pass"];
  session_start();
  $_SESSION["user"]=$usuario;


  $consulta="SELECT *  FROM usuarios where usuario='$usuario'
   and contraseña= '$contraseña'";
   $res=mysqli_query($conexion,$consulta);

  $filas=mysqli_fetch_array($res);

   if($filas['id_cargo']==1){
     header("Location: /Proyecto/registrar/index.php");
   }else
    if($filas['id_cargo']==2){
        header("Location: /Proyecto/registrar/index.php");
       }else
        if($filas['id_cargo']==3){
            header("Location: /Proyecto/registrar/index.php");
          }
          
          else{ 
            
            ?>
              <script>
                alert('Usuario o contraseña incorrectos. Intente de nuevo');
              window.location= "/Proyecto/login/index.php";
             </script>;
            
            <?php
          }

          mysqli_free_result($res);
          mysqli_close($conexion);
       
  


