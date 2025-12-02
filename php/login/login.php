<?php
    require '../../bd/ConexionBD.php';
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    
    $resultado = $conexion->query( "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'");
    
    if($resultado->num_rows > 0){
        echo "<script>alert('Usuario encontrado'); window.history.back();</script>";
        header("Location: ../../inicioDashboard.php");
        exit();
    }else{
        echo "<script>alert('Usuario no encontrado'); window.history.back();</script>";
    }
    
?>