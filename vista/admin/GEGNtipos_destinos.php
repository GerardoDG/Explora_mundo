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
                include "../../controlador/registro_tipodestino.php";
            ?>
            <h2>Tipos de Destinos</h2>
            <form action="" method="POST">
                <label class="formulario-inplbl" for="nombre">Nombre:</label>
                <input class="formulario-inplbl" type="text" id="nombre" name="nombre" required>
                <label class="formulario-inplbl" for="actividades">Actividades Populares:</label>
                <input class="formulario-inplbl" type="text" id="actividades" name="actividades" required>
                <label class="formulario-inplbl" for="epoca">Epoca Sugerida:</label>
                <input class="formulario-inplbl" type="text" id="epoca" name="epoca" required>
                <input class="formulario-inplbl" type="submit" value="Agregar" name="btnRegistrarTipoDestino">
            
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Actividades Populares</th>
                        <th>Epoca Sugerida</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                   include "../../modelo/conexion_bd.php";
                   $sql = $conexion->query(" select * from tbltipodestino ");
                   while($datos = $sql ->fetch_object()) { ?>
                   <tr>
                        <td><?= $datos->ID_TIPODESTINO ?></td>
                        <td><?= $datos->NOMBRE_DESTINO ?></td>
                        <td><?= $datos->ACTIVIDADES_POPULARES ?></td>
                        <td><?= $datos->EPOCA_SUGERIDA ?></td>
                        <td>
                            <a href="../modificaciones/formulario_modificar_tiposdestinos.php?id=<?= $datos->ID_TIPODESTINO ?>">Editar</a> 
                            <a href="../../controlador/eliminar_tipodestino.php?id=<?= $datos-> ID_TIPODESTINO ?>">Eliminar</a>
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