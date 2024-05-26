<?php
    $id = $_GET['id'];
    include "../../modelo/conexion_bd.php";
    $sql = $conexion->query(" select * from tblavion where ID_AVION = $id ");
    $datos = $sql ->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cruds.css">
    <title>Explora el Mundo</title>
</head>
<body>
    <header>
        <nav>
            <h1>EXPLORA EL MUNDO</h1>
            <ul>
                <li><a href="../../index.php">Inicio</a></li>
                <li><a href="../admin/GEGNadmin_home.php">Regresar</a></li>
                
            </ul>
        </nav>
    </header>
    <main id="formulario">
        <div>
            <h2>Modificación de Avión</h2>
            <?php
                include "../../controlador/modificar_avion.php"
            ?>
            <form action="" method="POST">
                <label for="serie">Numero de serie:</label>
                <input type="text" id="serie" name="serie" value="<?=$datos->NUMERO_SERIE ?>" required>
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" value="<?=$datos->MODELO ?>" required>
                <label for="capacidad">Capacidad Pasajeros:</label>
                <input type="number" id="capacidad" name="capacidad" value="<?=$datos->CAPACIDAD_ASIENTOS ?>" required>
                <label for="empresa">Empresa Propietaria:</label>
                <input type="text" id="empresa" name="empresa" value="<?=$datos->EMPRESA_PROPIETARIA ?>" required>
                <input type="submit" value="Modificar" name="btnmodificar">
            </form>
        </div>
    </main>
    <footer>
        <p>Explora el mundo &copy; 2024</p>
        <p>GEGN-PW1-2024/05/11</p>
    </footer>
</body>
</html>