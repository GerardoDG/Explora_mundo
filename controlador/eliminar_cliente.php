<?php
    include "../modelo/conexion_bd.php";
    $id = $_GET['id'];
    $sql = $conexion->query(" delete from tblcliente where id_cliente = $id ");
    if ($sql) {
        header("Location: ../vista/admin/GEGNadmin_home.php");    
    } else {
        echo "Error al eliminar el registro";
    }
    
    $conexion->close();
?>