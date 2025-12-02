<?php
    require '../../bd/ConexionBD.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];

    $actualizar_query = "UPDATE usuarios SET nombre = '$nombre',
                                             usuario = '$usuario',
                                             edad = '$edad',
                                             contraseña = '$password',
                                             telefono = '$telefono'
                                             WHERE id = '$id'";

    if($conexion -> query($actualizar_query) === TRUE){
             echo "<script>alert('Registro Actualizado'); window.history.back();</script>";
        }else{
            echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
?>