<?php
    include "../modelo/conexion_bd.php";
    $id = $_GET['id'];
    $sql = $conexion->query(" delete from tblavion where ID_AVION = $id ");
    if ($sql) {
        
    } else {
        echo "Error al eliminar el registro";
    }
    $conexion->close();
?>