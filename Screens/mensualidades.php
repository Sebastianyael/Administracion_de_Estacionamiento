<?php
    require '../bd/ConexionBD.php';
    require '../components/header.php';
    require '../components/aside.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/styles/general.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/styles/mensualidades.css?v=<?php echo time(); ?>">
    
</head>
<body>
    <div class="main" >
           <form action="../php/CRUDMensualidades/registrarMensualidad.php" method="post" class="form-mensualidades">

                <input type="text" name="nombre" placeholder="Nombre de la mensualidad" required>

                <input type="date" name="fecha_inicio" placeholder="Fecha inicio" required>

                <input type="date" name="fecha_fin" placeholder="Fecha fin" required>

                <input type="number" step="0.01" name="precio" placeholder="Precio" required>

                <button type="submit">Guardar mensualidad</button>

            </form>
            <br>
            <button class="actualizar-Button" onclick="location.reload();">Actualizar</button>

            <div class="mensualidades-container">
                <?php
                    $query = "SELECT id, nombre, fecha_inicio,fecha_fin,precio FROM mensualidades";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "
                            <div>
                                <h2>" . $row['nombre'] . "</h2>

                                <form action='../php/CRUDMensualidades/editarMensualidad.php' method='post' class='form-edicion'>
                                    <input type='text' name='nombre' value='" . $row['nombre'] . "' required>
                                    <input type='date' name='fecha_inicio' value='" . $row['fecha_inicio'] . "' required>
                                    <input type='date' name='fecha_fin' value='" . $row['fecha_fin'] . "' required>
                                    <input type='text' name='precio' value='" . $row['precio'] . "'>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button type='submit'>Editar</button>
                                </form>

                                <form action='../php/CRUDMensualidades/eliminarMensualidad.php' method='post'>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button type='submit'>Eliminar</button>
                                </form>
                            </div>
                            ";
                        }
                    }
                    ?>
            </div>

    </div>
    
</body>
</html>