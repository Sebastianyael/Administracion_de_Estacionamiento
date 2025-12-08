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
    <link rel="stylesheet" href="../assets/styles/general.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/styles/productos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="main" >
            <form action="../php/CRUDProductos/registrarProductos.php" method="post" class="insertar-producto">
                <form action="" method="post">
            
                <input type="text" name="nombre" placeholder="Nombre del producto" required>

                <textarea name="descripcion" placeholder="Descripción del producto" required></textarea>

                <input type="number" step="0.01" name="precio" placeholder="Precio" required>

                <input type="date" name="fecha_creacion" placeholder="Fecha de creación" required>

                <button type="submit">Guardar producto</button>

            </form>


            </form>
            <br>
            <button class="actualizar-Button" onclick="location.reload();">Actualizar</button>

            <div class="productos-container">
                <?php
                    $query = "SELECT id, nombre, descripcion, precio,fecha_creacion FROM productos";
                    $resultado = $conexion->query($query);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "
                            <div>
                                <h2>" . $row['nombre'] . "</h2>

                                <form action='../php/CRUDProductos/editarProducto.php' method='post' class='form-edicion'>
                                    <input type='text' name='nombre' value='" . $row['nombre'] . "' required>
                                    <textarea name='descripcion' required>" . $row['descripcion'] . "</textarea>
                                    <input type='number' name='precio' value='" . $row['precio'] . "'>
                                    <input type='date' name='fecha_creacion' value='" . $row['fecha_creacion'] . "' required>
                                    
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button type='submit'>Editar</button>
                                </form>

                                <form action='../php/CRUDProductos/eliminarProducto.php' method='post'>
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