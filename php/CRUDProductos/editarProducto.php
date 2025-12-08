<?php
    require '../../bd/ConexionBD.php';

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $fecha_creacion = $_POST['fecha_creacion'];
   
    $id = $_POST['id'];

    $actualizar_query = "UPDATE productos SET nombre = '$nombre' , descripcion = '$descripcion' , precio = '$precio' , fecha_creacion= '$fecha_creacion' WHERE id = '$id'";

    if($conexion -> query($actualizar_query) === TRUE){
             echo "<script>alert('Registro Actualizado'); window.history.back();</script>";
        }else{
            echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
    ?>