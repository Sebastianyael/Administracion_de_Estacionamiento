<?php

    require '../../bd/ConexionBD.php';

    $nombre = $_POST['nombre'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fechaFin = $_POST['fecha_fin'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO mensualidades(nombre,fecha_inicio,fecha_fin,precio) VALUES('$nombre','$fecha_inicio','$fechaFin','$precio')";

    if($conexion->query($query) === TRUE){
        echo "<script>alert('Mensualidad Registrada'); window.history.back();</script>";;
    }else{
        echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }
     $conexion->close();
?>