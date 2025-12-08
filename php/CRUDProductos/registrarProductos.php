<?php
    require '../../bd/ConexionBD.php';

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $fecha_creacion = $_POST['fecha_creacion'];

    $query = "INSERT INTO productos(nombre,descripcion,precio,fecha_creacion) VALUES('$nombre','$descripcion','$precio','$fecha_creacion')";

    if($conexion->query($query) === TRUE){
         echo "<script>alert('Producto Registrado'); window.history.back();</script>";
    }else{
        echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();


?>