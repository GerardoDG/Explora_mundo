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
            <h2>Registro de nuevo cliente</h2>
            <?php
                include "../../modelo/conexion_bd.php";
                include "../../controlador/registro_cliente.php";
            ?>
            <form action="" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" required>
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" id="apellido_materno" name="apellido_materno" required>
                <label for="rfc">RFC:</label>
                <input type="text" id="rfc" name="rfc" required>
                <label for="curp">CURP:</label>
                <input type="text" id="curp" name="curp" required>
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
                <input type="submit" value="Agregar" name="btnregistrar">
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>RFC</th>
                        <th>CURP</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../../modelo/conexion_bd.php";
                    $sql = $conexion->query(" select * from tblcliente ");
                    while($datos = $sql ->fetch_object()) { ?>
                    <tr>
                        <td><?= $datos->id_cliente ?></td>
                        <td><?= $datos->NOMBRE ?></td>
                        <td><?= $datos->APELLIDO_PATERNO ?></td>
                        <td><?= $datos->APELLIDO_MATERNO ?></td>
                        <td><?= $datos->RFC ?></td>
                        <td><?= $datos->CURP ?></td>
                        <td><?= $datos->CORREO ?></td>
                        <td><?= $datos->CONTRASENA ?></td>
                        <td>
                            <a href="../modificaciones/formulario_modificacion_cliente.php?id=<?= $datos->id_cliente ?>">Editar</a> 
                            <a href="../../controlador/eliminar_cliente.php?id=<?= $datos -> id_cliente ?>">Eliminar</a>
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