<?php
    require '../../bd/ConexionBD.php';
    $id = $_POST['id'];
    
    $query = "DELETE FROM productos WHERE id = '$id'";

    if($conexion -> query($query) === TRUE){
             echo "<script>alert('Producto Eliminado'); window.history.back();</script>";
        }else{
            echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();

?>