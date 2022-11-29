<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="login">
        <img src="logo.png" alt="imagen" class="imagen">

        <form action="conectar/validar.php" method="POST">
            <h2>Inicia sesión</h2>
      
            <label  for="user"> Usuario: </label>
            <input  type="text" name="user" id="userInput">
            
            <label for="pass"> Contraseña: </label>
            <input type="password" name="pass" id="passInput">
            
            <input type="submit" value="Ingresar" class="ingreso">
          </form>
    </div>
    
</body>
</html>