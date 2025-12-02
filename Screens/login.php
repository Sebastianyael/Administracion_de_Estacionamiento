<?php
    require '../bd/ConexionBD.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/login.css">
    
    <title>Document</title>
</head>
<body>
    <div class="login-container">

        <form action="../php/login/login.php" method="post" class="formulario-login-container">
            <h2>Inicio de Sesion</h2>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>

            <button >Iniciar Sesion </button>
        </form>
        

        <div class="img-container" >
            <img src="../assets/images/usuario.png" alt="">
        </div>
    </div>

</body>
</html>