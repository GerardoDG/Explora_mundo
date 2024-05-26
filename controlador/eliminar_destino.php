<?php
    include "../modelo/conexion_bd.php";
    


    $id = $_GET["id"];
    $sql = $conexion->query(" delete from tbldestino where id_destino = $id ");
    if($sql){
        
    } else{
        echo "Error al eliminar el destino";
    }
?>