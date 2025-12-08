<?php
    require '../../bd/ConexionBD.php';

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fechaInicio = $_POST['fecha_inicio'];
    $fechaFin = $_POST['fecha_fin'];
    $codigo = $_POST['codigo'];
    $id = $_POST['id'];

    $actualizar_query = "UPDATE promociones SET nombre = '$nombre' , descripcion = '$descripcion' , fecha_inicio = '$fechaInicio' , fecha_fin = '$fechaFin' , codigo = '$codigo' WHERE id = '$id'";

    if($conexion -> query($actualizar_query) === TRUE){
             echo "<script>alert('Registro Actualizado'); window.history.back();</script>";
        }else{
            echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
    ?>