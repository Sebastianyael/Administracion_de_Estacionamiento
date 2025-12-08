<?php
    // $HOST = 'localhost';
    // $USERNAME = 'root';
    // $PASSWORD = '';
    // $DBNAME = 'estacionamiento';

    // $conexion = new mysqli($HOST,$USERNAME,$PASSWORD,$DBNAME); 
    // if($conexion -> connect_error){ 
    //     die("Conexion Fallida: ".$conexion->connect_error); 
    // }

    $HOST = 'mainline.proxy.rlwy.net';
    $PORT = 56944; 
    $USERNAME = 'root';
    $PASSWORD = 'BKgHgtlUGCmkYYxjYEsjPJcSQmARCNFp';
    $DBNAME = 'railway';

    $conexion = new mysqli($HOST, $USERNAME, $PASSWORD, $DBNAME, $PORT);

    if ($conexion->connect_error) { 
        die("Conexion Fallida: " . $conexion->connect_error); 
    }
?>