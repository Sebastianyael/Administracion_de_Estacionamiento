<?php
    require '../components/header.php';
    require '../components/aside.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styles/general.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/styles/usuario.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <div class="main ">
        <h2>Registrar Administradores</h2>
        <form action="../php/CRUDRegistrar_Usuarios/registrar_usuario.php" method="post" class="registar-usuario">
            <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
            <input type="text" placeholder="Usuario" name="usuario" required>
            <input type="number" placeholder="Edad" name="edad" required>
            <input type="password" placeholder="Contraseña" name="contraseña" required>
            <input type="number" placeholder="Telefono" name="telefono" required>
            
            <button type="submit" class="registrar-admins">
                Registrar Usuarios
            </button>
        </form>
        
        <button class="actualizar-Button" onclick="location.reload();">Actualizar</button>
        <br>
        <div class="usuaurios-container">

        <?php
            require '../bd/ConexionBD.php';

            $seleccion = "SELECT id, nombre, usuario, edad, contraseña,telefono FROM usuarios";
                $result_select = $conexion->query($seleccion);

                if ($result_select->num_rows > 0) {
                    while ($row = $result_select->fetch_assoc()) {
                        echo "
                            <div class='tarjeta-usuario'>
                                <i class='fa-solid fa-users'></i>

                                <form action='../php/CRUDRegistrar_Usuarios/actualizar_usuario.php' method='post' class='actualizar-registro'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <input type='text' name='nombre' value='{$row['nombre']}'>
                                    <input type='text' name='usuario' value='{$row['usuario']}'>
                                    <input type='number' name='edad' value='{$row['edad']}'>
                                    <input type='text' name='telefono' value='{$row['telefono']}'>
                                    <input type='text' name='password' value='{$row['contraseña']}'>
                                    <button type='submit' name='actualizar'>Actualizar</button>
                                </form>

                                <form action='../php/CRUDRegistrar_Usuarios/eliminar_usuarios.php' method='post' class='eliminar-registro'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <button type='submit' name='eliminar'>Eliminar</button>
                                </form>

                            </div>
                        ";
                    }
                }
                ?> 
        </div>
    </div>
    
</body>
</html>