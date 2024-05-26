<?php
include "../../modelo/conexion_bd.php";


if (!empty($_POST["btnRegistroDestino"])) {

    $avion1 = $_POST["avion1"];
    $avion2 = $_POST["avion2"];
    $transporte1 = $_POST["transporte1"];
    $transporte2 = $_POST["transporte2"];
    $tipo_destino = $_POST["tipo_destino"];
    $pais = $_POST["pais"];
    $resena = $_POST["resena"];
    $coordenadas = $_POST["coordenadas"];

    echo $avion1;
    echo $avion2;
    echo $transporte1;
    echo $transporte2;
    echo $tipo_destino;
    echo $pais;
    echo $resena;
    echo $coordenadas;
    try {
        $sql = "INSERT INTO tbldestino (id_tipodestino, ID_AVION1, ID_AVION2, ID_TRANSP1, ID_TRANSP2, PAIS, RESENA, COORDENADAS) VALUES ('$tipo_destino', '$avion1', '$avion2', '$transporte1', '$transporte2', '$pais', '$resena', '$coordenadas')";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $conexion->query($sql);
}
