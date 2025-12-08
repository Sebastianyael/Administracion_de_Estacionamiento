<?php

    require '../../bd/ConexionBD.php';

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fechaInicio = $_POST['fecha_inicio'];
    $fechaFin = $_POST['fecha_fin'];
    $codigo = $_POST['codigo'];

    $query = "INSERT INTO promociones(nombre,descripcion,fecha_inicio,fecha_fin,codigo) VALUES('$nombre','$descripcion','$fechaInicio','$fechaFin','$codigo')";

    if($conexion->query($query) === TRUE){
        echo "<script>alert('Promocion Registrada'); window.history.back();</script>";;
    }else{
        echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }
     $conexion->close();
?>