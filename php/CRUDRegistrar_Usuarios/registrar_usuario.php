<?php
    require '../../bd/ConexionBD.php';

    $nombre = $_POST['nombre_completo'];
    $usuario = $_POST['usuario'];
    $edad = $_POST['edad'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];

    $insertar_usuario_query = "INSERT INTO usuarios(nombre,usuario,edad,contraseña,telefono) 
                                values('$nombre','$usuario','$edad','$contraseña','$telefono')";
    
    if($conexion -> query($insertar_usuario_query) === TRUE){
             echo "<script>alert('Nuevo usuario registrado'); window.history.back();</script>";
        }else{
            echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
        }

    $conexion->close();
?>