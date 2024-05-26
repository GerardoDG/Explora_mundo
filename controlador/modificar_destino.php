<?php
    include "../../modelo/conexion_bd.php";
    $id = $_GET['id'];
    $sql = $conexion->query(" select * from tbldestino where ID_DESTINO = $id ");
    $datos = $sql ->fetch_object();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pais = $_POST["pais"];
        $resena = $_POST["resena"];
        $coordenadas = $_POST["coordenadas"];
        
        $sql = "UPDATE tbldestino SET PAIS = '$pais', RESENA = '$resena', COORDENADAS = '$coordenadas' WHERE ID_DESTINO = $id";
        $conexion->query($sql);
        }else{
            echo "Error al modificar el destino";
        }
    $conexion->close();
?>