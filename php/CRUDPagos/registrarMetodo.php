<?php
    require '../../bd/ConexionBD.php';

    $metodo = $_POST['pago'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO pagos(nombre,descripcion) VALUES('$metodo','$descripcion')";
    
    if($conexion->query($query) === TRUE){
        echo "<script>alert('Nuevo metodo de pago registrado'); window.history.back();</script>";
        }else{
            echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
        }

    $conexion->close();
    
?>