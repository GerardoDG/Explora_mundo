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
                <li><a href="GEGNadmin_home.php">Regresar</a></li>
            </ul>
        </nav>
    </header>
    <main id="formulario">
        <div>
            <h2>Aviones</h2>
            <?php
                include "../../modelo/conexion_bd.php";
                include "../../controlador/registro_avion.php"
            ?>
            <form action="" method="POST">
                <label for="serie">Numero de serie:</label>
                <input type="text" id="serie" name="serie" required>
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" required>
                <label for="capacidad">Capacidad Pasajeros:</label>
                <input type="number" id="capacidad" name="capacidad" required>
                <label for="empresa">Empresa Propietaria:</label>
                <input type="text" id="empresa" name="empresa" required>
                <input type="submit" value="Agregar" name="btnregistro-avion">
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NUMERO DE SERIE</th>
                        <th>MODELO</th>
                        <th>CAPACIDAD PASAJEROS</th>
                        <th>EMPRESA PROPIETARIA</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../../modelo/conexion_bd.php";
                    $sql = $conexion->query(" select * from tblavion ");
                    while($datos = $sql ->fetch_object()) { ?>
                    <tr>
                        <td><?= $datos->ID_AVION ?></td>
                        <td><?= $datos->NUMERO_SERIE ?></td>
                        <td><?= $datos->MODELO ?></td>
                        <td><?= $datos->CAPACIDAD_ASIENTOS ?></td>
                        <td><?= $datos->EMPRESA_PROPIETARIA ?></td>
                        <td>
                            <a href="../modificaciones/formulario_modificar_aviones.php?id=<?= $datos->ID_AVION ?>">Editar</a> 
                            <a href="../../controlador/eliminar_avion.php?id=<?= $datos -> ID_AVION ?>">Eliminar</a>
                        </td>
                    </tr>
                    
                    <?php }

                    $conexion->close(); ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p>Explora el Mundo &copy; 2024</p>
        <p>GEGN-PW1-2024/05/11</p>
    </footer>
</body>
</html>