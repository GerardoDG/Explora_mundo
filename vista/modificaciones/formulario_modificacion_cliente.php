<?php
    $id = $_GET['id'];
    include "../../modelo/conexion_bd.php";
    $sql = $conexion->query(" select * from tblcliente where id_cliente = $id ");
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
            <h2>Modificación de Cliente</h2>
            <?php
                include "../../controlador/modificar_cliente.php"
            ?>
            <form action="" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?=$datos->NOMBRE ?>" required>
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" value="<?=$datos->APELLIDO_PATERNO ?>" required>
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" id="apellido_materno" name="apellido_materno" value="<?=$datos->APELLIDO_MATERNO ?>" required>
                <label for="rfc">RFC:</label>
                <input type="text" id="rfc" name="rfc" value="<?=$datos->RFC ?>" required>
                <label for="curp">CURP:</label>
                <input type="text" id="curp" name="curp" value="<?=$datos->CURP ?>" required>
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" value="<?=$datos->CORREO ?>" required>
                <label for="contrasena">Contraseña:</label>
                <input type="text" id="contrasena" name="contrasena" value="<?=$datos->CONTRASENA ?>" required>
                <input type="submit" value="Modificar" name="btnregistrar">
            </form>
        </div>
    </main>
    <footer>
        <p>Explora el Mundo &copy; 2024</p>
        <p>GEGN-PW1-2024/05/11</p>
    </footer>
</body>
</html>