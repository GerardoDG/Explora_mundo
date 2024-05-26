<?php
    include "../modelo/conexion_bd.php";

    $id = $_GET['id'];
    $sql = $conexion->query(" delete from tbltipodestino where ID_TIPODESTINO = $id ");
    if($sql){
        
    }else{
        echo "Error al eliminar";
    }
?>