<?php
    if(!empty($_POST['btnRegistrarTipoDestino'])){
        $nombre = $_POST['nombre'];
        $actividades = $_POST['actividades'];
        $epoca = $_POST['epoca'];

        $sql = $conexion->query(" insert into tbltipodestino (NOMBRE_DESTINO, ACTIVIDADES_POPULARES, EPOCA_SUGERIDA) values ('$nombre', '$actividades', '$epoca') ");
        
    }
    $conexion->close();
?>