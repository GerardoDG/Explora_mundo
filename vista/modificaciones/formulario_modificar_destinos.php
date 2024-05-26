<?php
    $id = $_GET['id'];
    include "../../modelo/conexion_bd.php";
    $sql = $conexion->query(" select * from tbldestino where id_destino = $id ");
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
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../admin/GEGNadmin_home.php">Regresar</a></li>
            </ul>
        </nav>
    </header>
    <main id="formulario">
        <div>
            <h2>Modificacion de destinos</h2>
            <?php
                include "../../controlador/modificar_destino.php"
            ?>
            <form action="" method="POST">
                <div>
                    <label for="pais">País:</label>
                    <input type="text" id="pais" name="pais" value="<?= $datos->PAIS ?>">
                </div>
                <div>
                    <label for="resena">Reseña:</label>
                    <textarea id="resena" name="resena"><?= $datos->RESENA ?></textarea>
                </div>
                <div>
                    <label for="coordenadas">Coordenadas:</label>
                    <input type="text" id="coordenadas" name="coordenadas" value="<?= $datos->COORDENADAS ?>">
                </div>
                <div>
                    <input type="submit" value="Guardar" name="btnModificarDestino">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <p>Explora el Mundo &copy; 2024</p>
        <p>GEGN-PW1-2024/05/11</p>
    </footer>
</body>
</html>