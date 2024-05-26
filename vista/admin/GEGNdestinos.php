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
    <?php
        include "../../modelo/conexion_bd.php";

        // Obtener opciones de tblavion
        $queryAvion = $conexion->query("SELECT ID_AVION, MODELO FROM tblavion");
        $aviones = $queryAvion->fetch_all(MYSQLI_ASSOC);

        // Obtener opciones de tbltipodestio
        $queryDestino = $conexion->query("SELECT ID_TIPODESTINO, NOMBRE_DESTINO FROM tbltipodestino");
        $destinos = $queryDestino->fetch_all(MYSQLI_ASSOC);

        // Obtener opciones de tbltransporte_terrestre
        $queryTransporte = $conexion->query("SELECT ID_TRANSPTERRESTRE, CAPACIDAD_PASAJEROS FROM tbltransporte_terrestre");
        $transportes = $queryTransporte->fetch_all(MYSQLI_ASSOC);
    ?>
    <main id="formulario">
        <div>
        <?php
            include "../../controlador/registro_destino.php";
        ?>
        <form action="" method="POST">
            <div>
                <label for="tipo_destino">Tipo de Destino:</label>
                <select  id="tipo_destino" onchange="getChanges()">
                    <option value="" ></option>
                    <?php foreach ($destinos as $destino) { ?>
                        <option id="" value=""><?= $destino['ID_TIPODESTINO'] ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" id="hidden-destino" value="" name="tipo_destino">
            </div>
            <div>
                <label for="avion1">Avión 1:</label>
                <select id="avion1" onchange="getChanges()">
                    <option value="" ></option>
                    <?php foreach ($aviones as $avion) { ?>
                        <option value=""><?= $avion['ID_AVION'] ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" id="hidden-avion1" value="" name="avion1">
            </div>
            <div>
                <label for="avion2">Avión 2:</label>
                <select id="avion2" onchange="getChanges()">
                    <option value="" ></option>
                    <?php foreach ($aviones as $avion) { ?>
                        <option value=""><?= $avion['ID_AVION'] ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" id="hidden-avion2" value="" name="avion2">
            </div>
            <div>
                <label for="transporte1">Transporte Terrestre 1:</label>
                <select id="transporte1" onchange="getChanges()">
                    <option value="" ></option>
                    <?php foreach ($transportes as $transporte) { ?>
                        <option value=""><?= $transporte['ID_TRANSPTERRESTRE'] ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" id="hidden-transporte1" value="" name="transporte1">
            </div>
            <div>
                <label for="transporte2">Transporte Terrestre 2:</label>
                <select id="transporte2" onchange="getChanges()">
                    <option value="" ></option>
                    <?php foreach ($transportes as $transporte) { ?>
                        <option value=""><?= $transporte['ID_TRANSPTERRESTRE'] ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" id="hidden-transporte2" value="" name="transporte2">
            </div>
            <div>
                <label for="pais">País:</label>
                <input type="text" id="pais" name="pais">
            </div>
            <div>
                <label for="resena">Reseña:</label>
                <textarea id="resena" name="resena"></textarea>
            </div>
            <div>
                <label for="coordenadas">Coordenadas:</label>
                <input type="text" id="coordenadas" name="coordenadas">
            </div>
            <div>
                <input type="submit" value="Guardar" name="btnRegistroDestino">
            </div>
        </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID DESTINOS</th>
                        <th>ID TIPO DE DESTINO</th>
                        <th>ID AVION 1</th>
                        <th>ID AVION 2</th>
                        <th>ID TERRESTRE 1</th>
                        <th>ID TERRESTRE 2</th>
                        <th>PAIS</th>
                        <th>RESEÑA</th>
                        <th>COORDENADAS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                   include "../../modelo/conexion_bd.php";
                   $sql = $conexion->query(" select * from tbldestino ");
                   while($datos = $sql ->fetch_object()) { ?>
                   <tr>
                        <td><?= $datos->id_destino ?></td>
                        <td><?= $datos->id_tipodestino ?></td>
                        <td><?= $datos->ID_AVION1 ?></td>
                        <td><?= $datos->ID_AVION2 ?></td>
                        <td><?= $datos->ID_TRANSP1 ?></td>
                        <td><?= $datos->ID_TRANSP2 ?></td>
                        <td><?= $datos->PAIS ?></td>
                        <td><?= $datos->RESENA ?></td>
                        <td><?= $datos->COORDENADAS ?></td>
                        <td>
                            <a href="../modificaciones/formulario_modificar_destinos.php?id=<?= $datos->id_destino ?>">Editar</a> 
                            <a href="../../controlador/eliminar_destino.php?id=<?= $datos -> id_destino ?>">Eliminar</a>
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
<script>
    function getChanges() {
        const tdestino = document.getElementById('tipo_destino');
        const hiddestino = document.getElementById('hidden-destino');
        const avion1 = document.getElementById('avion1');
        const hidavion1 = document.getElementById('hidden-avion1');
        const avion2 = document.getElementById('avion2');
        const hidavion2 = document.getElementById('hidden-avion2');
        const transporte1 = document.getElementById('transporte1');
        const hidtransporte1 = document.getElementById('hidden-transporte1');
        const transporte2 = document.getElementById('transporte2');
        const hidtransporte2 = document.getElementById('hidden-transporte2');

        hiddestino.value = tdestino.options[tdestino.selectedIndex].text;
        hidavion1.value = avion1.options[avion1.selectedIndex].text;
        hidavion2.value = avion2.options[avion2.selectedIndex].text;
        hidtransporte1.value = transporte1.options[transporte1.selectedIndex].text;
        hidtransporte2.value = transporte2.options[transporte2.selectedIndex].text;
    }

    getDestino();
</script>
</html>