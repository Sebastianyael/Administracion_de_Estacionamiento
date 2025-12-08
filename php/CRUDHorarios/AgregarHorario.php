<?php
require '../../bd/ConexionBD.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $dia = $_POST['dia'];
    $apertura = $_POST['apertura'];
    $cierre = $_POST['cierre'];

    
    $check = $conexion->prepare("SELECT * FROM horarios WHERE dia = ?");
    $check->bind_param("s", $dia);
    $check->execute();
    $res = $check->get_result();



  
    $insert = $conexion->prepare("INSERT INTO horarios(dia, hora_apertura, hora_cierre)
                                  VALUES (?, ?, ?)");
    $insert->bind_param("sss", $dia, $apertura, $cierre);
    $insert->execute();

    echo "<script>alert('✔ Horario registrado correctamente'); window.location='../../Screens/horarios.php';</script>";
    exit;
}
?>
