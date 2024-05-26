<?php
    if(!empty($_POST['btnModificarTipoDestino'])){
        $nombre = $_POST['nombre'];
        $actividades = $_POST['actividades'];
        $epoca = $_POST['epoca'];

        $sql = $conexion->query(" update tbltipodestino set NOMBRE_DESTINO = '$nombre', ACTIVIDADES_POPULARES = '$actividades', EPOCA_SUGERIDA = '$epoca' where ID_TIPODESTINO = $id ");
        if($sql){
        }else{
            echo "Error al modificar";
        }
    }
    $conexion->close();

?>