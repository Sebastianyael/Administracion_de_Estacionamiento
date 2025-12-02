<?php
    require '../../bd/ConexionBD.php';
    $id = $_POST['id'];
    $eliminar_query = "DELETE FROM usuarios WHERE id = '$id'";

    if($conexion -> query($eliminar_query) === TRUE){
             echo "<script>alert('Usuario Eliminado'); window.history.back();</script>";
        }else{
            echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
?>