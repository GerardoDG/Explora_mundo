<?php
    $id = $_GET['id'];
    include "../../modelo/conexion_bd.php";
    $sql = $conexion->query(" select * from tbltipodestino where ID_TIPODESTINO = $id ");
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
                include "../../controlador/modificar_tipodestino.php";
            ?>
            <h2>Tipos de Destinos</h2>
            <form action="" method="POST">
                <label class="formulario-inplbl" for="nombre">Nombre:</label>
                <input class="formulario-inplbl" type="text" id="nombre" name="nombre" value="<?= $datos -> NOMBRE_DESTINO?>" required>
                <label class="formulario-inplbl" for="actividades">Actividades Populares:</label>
                <input class="formulario-inplbl" type="text" id="actividades" name="actividades" value="<?= $datos -> ACTIVIDADES_POPULARES ?>" required>
                <label class="formulario-inplbl" for="epoca">Epoca Sugerida:</label>
                <input class="formulario-inplbl" type="text" id="epoca" name="epoca" value="<?= $datos -> EPOCA_SUGERIDA?>" required>
                <input class="formulario-inplbl" type="submit" value="Agregar" name="btnModificarTipoDestino">
            
            </form>
        </div>
    </main>
    <footer>
        <p>Explora el Mundo &copy; 2024</p>
        <p>GEGN-PW1-2024/05/11</p>
    </footer>
</body>
</html>