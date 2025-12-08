<?php
    require '../../bd/ConexionBD.php';

    $nombre = $_POST['nombre'];
    $fechaInicio = $_POST['fecha_inicio'];
    $fechaFin = $_POST['fecha_fin'];
    $precio = $_POST['precio'];
    $id = $_POST['id'];

    $actualizar_query = "UPDATE mensualidades SET nombre = '$nombre' ,fecha_inicio = '$fechaInicio' , fecha_fin = '$fechaFin' , precio = '$precio' WHERE id = '$id'";

    if($conexion -> query($actualizar_query) === TRUE){
             echo "<script>alert('Registro Actualizado'); window.history.back();</script>";
        }else{
            echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
    ?>