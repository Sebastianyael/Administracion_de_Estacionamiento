<?php
    require '../../bd/ConexionBD.php';
    $id = $_POST['id'];

    if($conexion->query("DELETE FROM incidencias WHERE id = '$id' ") === TRUE){
        echo "<script>alert('Incidencia Eliminada'); window.history.back();</script>";
    }else{
        echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
?>