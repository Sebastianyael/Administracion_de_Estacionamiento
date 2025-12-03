<?php
    require '../../bd/ConexionBD.php';

    $titulo = $_POST['titulo'];
    $descipcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO incidencias(titulo,descripcion,fecha_de_reporte) VALUES('$titulo','$descipcion','$fecha')";

    if($conexion->query($query) === TRUE){
        echo "<script>alert('Incidente Registrado'); window.history.back();</script>";;
    }else{
        echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
?>