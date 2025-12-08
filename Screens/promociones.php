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
    <link rel="stylesheet" href="../assets/styles/promociones.css?v=<?php echo time(); ?>">
    
</head>
<body>
    <div class="main" >
        

            <form action="../php/CRUDPromociones/registrarPromocion.php" method="post" class="insertar-promo">

                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="date" name="fecha_inicio" placeholder="Fecha inicio" required>
                <input type="date" name="fecha_fin" placeholder="Fecha fin" required>
                <input type="text" name="codigo" placeholder="Código (opcional)">
                <textarea name="descripcion" placeholder="Descripción" required></textarea>
                <button type="submit">Guardar</button>

            </form>
            <br>
            <button class="actualizar-Button" onclick="location.reload();">Actualizar</button>

            <div class="promociones-container">
                <?php
                    $query = "SELECT id, nombre, descripcion, fecha_inicio, fecha_fin, codigo FROM promociones";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "
                            <div>
                                <h2>" . $row['nombre'] . "</h2>

                                <form action='../php/CRUDPromociones/editarPromocion.php' method='post' class='form-edicion'>
                                    <input type='text' name='nombre' value='" . $row['nombre'] . "' required>
                                    <input type='date' name='fecha_inicio' value='" . $row['fecha_inicio'] . "' required>
                                    <input type='date' name='fecha_fin' value='" . $row['fecha_fin'] . "' required>
                                    <input type='text' name='codigo' value='" . $row['codigo'] . "'>
                                    <textarea name='descripcion' required>" . $row['descripcion'] . "</textarea>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button type='submit'>Editar</button>
                                </form>

                                <form action='../php/CRUDPromociones/eliminarPromocion.php' method='post'>
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