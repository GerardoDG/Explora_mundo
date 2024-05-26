<?php
    include "../modelo/conexion_bd.php";
    $id = $_GET['id'];
    $sql = $conexion->query(" delete from tbltransporte_terrestre where ID_TRANSPTERRESTRE = $id ");
    if($sql){
    }else{
        echo "Error al eliminar";
    }
    $conexion->close();
?>