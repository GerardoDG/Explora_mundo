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
            <?php
                include "../../modelo/conexion_bd.php";
                include "../../controlador/registro_transpterrestre.php"
            ?>
            <h2>Transportes Terrestres</h2>
            <form action="" method="POST">
                <label for="placa">Placa:</label>
                <input type="text" id="placa" name="placa" required>
                <label for="capacidad">Capacidad Pasajeros:</label>
                <input type="number" id="capacidad" name="capacidad" required>
                <label for="anio">Año de Fabricación:</label>
                <input type="number" id="anio" name="anio" required>
                <label for="empresa">Empresa Propietaria:</label>
                <input type="text" id="empresa" name="empresa" required>
                <input type="submit" value="Agregar" name="btnRegistrarTransporte">
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PLACA</th>
                        <th>CAPACIDAD PASAJEROS</th>
                        <th>AÑO DE FABRICACION</th>
                        <th>EMPRESA PROPIETARIA</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../../modelo/conexion_bd.php";
                    $sql = $conexion->query(" select * from tbltransporte_terrestre ");
                    while($datos = $sql ->fetch_object()) { ?>
                    <tr>
                        <td><?= $datos->ID_TRANSPTERRESTRE ?></td>
                        <td><?= $datos->PLACA ?></td>
                        <td><?= $datos->CAPACIDAD_PASAJEROS ?></td>
                        <td><?= $datos->ANIO_FABRICACION ?></td>
                        <td><?= $datos->EMPRESA_PROPIETARIA ?></td>
                        <td>
                            <a href="../modificaciones/formulario_modificar_transpterrestres.php?id=<?= $datos-> ID_TRANSPTERRESTRE ?>">Editar</a> 
                            <a href="../../controlador/eliminar_transpterrestre.php?id=<?= $datos-> ID_TRANSPTERRESTRE ?>">Eliminar</a>
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