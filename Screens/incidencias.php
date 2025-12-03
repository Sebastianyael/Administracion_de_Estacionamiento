<?php
    require '../components/header.php';
    require '../components/aside.php';
    require '../bd/ConexionBD.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/styles/general.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/styles/incidencias.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="main">
        <h2>Incidencias</h2>
        <form action="../php/CRUDIncidencias/registrar_incidencia.php" method="post" class="reportar-incidencias-form">
            <input type="text" placeholder="Titulo" name="titulo" >
            <textarea type="text" placeholder="Descripcion" style="width:60%;height:15vh" name="descripcion" ></textarea>
            <input type="datetime-local" style="margin-left:-200px" name="fecha" >


            <button type="submit">
                Registrar Reporte
            </button>
        </form>
       
        <button class="actualizar-Button" onclick="location.reload();">Actualizar</button>

        <div class="incidencias-container">
            <?php
                $resultado = $conexion->query("SELECT id,titulo,descripcion,fecha_de_reporte FROM incidencias");
                if($resultado -> num_rows > 0){
                    while($row = $resultado-> fetch_assoc()){
                        echo "
                        <div>
                            <h3>" . $row['titulo'] . "</h3>
                            <p>" . $row['descripcion'] . "</p>
                            <p>" . $row['fecha_de_reporte'] . "</p>
                            <form action='../php/CRUDIncidencias/eliminar_incidencia.php' method='post' class='eliminar_formulario'>
                                <input type='hidden' name='id' value='" . $row['id'] . "'>
                                
                                <button>
                                    Eliminar
                                </button>
                            </form>
                        </div>
                        ";
                    }
                }else{
                    echo "NO hay registros para mostrar";
                }
                $conexion->close();
            ?>



           
        </div>  
    </div>
    
</body>
</html>