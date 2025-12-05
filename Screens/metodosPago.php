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
    <link rel="stylesheet" href="../assets/styles/pagos.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="main" style="border:1px solid red;">

        <form method="post" action="../php/CRUDPagos/registrarMetodo.php" class="formulario-metodos">
            <input type="text" name="pago"  placeholder="Metodo de Pago" required>
            <input type="text" name="descripcion"  placeholder="Descripcion" required>

            <button type="submit">Registrar</button>
        </form>

        <button class="actualizar-Button" onclick="location.reload();">Actualizar</button>
        <br>

        <?php
            $query = "SELECT id, nombre FROM pagos";
            $result = $conexion->query($query);
        ?>

        <div class="tarjetas-pagos-container">

            <?php while ($row = $result->fetch_assoc()) { ?>

                <div class="tarjeta-pago">
                    <i class="fa-solid fa-coins"></i>
                    <h3><?php echo $row['nombre']; ?></h3>

                    <form method="POST" action="../php/CRUDPagos/eliminarMetodo.php">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="eliminarButton">Eliminar</button>
                    </form>
                </div>

            <?php } ?>
        </div>

    </div>
</body>
</html>
