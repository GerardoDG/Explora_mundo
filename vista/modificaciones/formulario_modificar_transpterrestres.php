<?php
    $id = $_GET['id'];
    include "../../modelo/conexion_bd.php";
    $sql = $conexion->query(" select * from tbltransporte_terrestre where ID_TRANSPTERRESTRE = $id ");
    $datos = $sql->fetch_object();
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
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../admin/GEGNadmin_home.php">Regresar</a></li>
            </ul>
        </nav>
    </header>
    <main id="formulario">
        <div>
            <?php
                include "../../modelo/conexion_bd.php";
                include "../../controlador/modificar_transpterrestre.php"
            ?>
            <h2>Transportes Terrestres</h2>
            <form action="" method="POST">
                <label for="placa">Placa:</label>
                <input type="text" id="placa" name="placa" value="<?= $datos->PLACA ?>" required>
                <label for="capacidad">Capacidad Pasajeros:</label>
                <input type="number" id="capacidad" name="capacidad" value="<?= $datos->CAPACIDAD_PASAJEROS ?>" required>
                <label for="anio">Año de Fabricación:</label>
                <input type="number" id="anio" name="anio" value="<?= $datos->ANIO_FABRICACION ?>" required>
                <label for="empresa">Empresa Propietaria:</label>
                <input type="text" id="empresa" name="empresa" value="<?= $datos->EMPRESA_PROPIETARIA ?>" required>
                <input type="submit" value="Agregar" name="btnModificarTransporte">
        </div>
    </main>
    <footer>
        <p>Explora el Mundo &copy; 2024</p>
        <p>GEGN-PW1-2024/05/11</p>
    </footer>
</body>
</html>