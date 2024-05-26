<?php

if (!empty($_POST['btnRegistrarTransporte'])) {
    $placa = $_POST['placa'];
    $capacidad = $_POST['capacidad'];
    $anio = $_POST['anio'];
    $empresa = $_POST['empresa'];

    if ($_POST["capacidad"] < 0 || $_POST["capacidad"] == "" || $_POST["capacidad"] > 80 || $_POST["anio"] < 2000 || $_POST["anio"] == "" || $_POST["anio"] > 2024) {
        echo "Capacidad de asientos no válida o año de fabricación no válido";
    } else {
        $sql = $conexion->query(" insert into tbltransporte_terrestre (PLACA, CAPACIDAD_PASAJEROS, ANIO_FABRICACION, EMPRESA_PROPIETARIA) values ('$placa', $capacidad, $anio, '$empresa') ");
    }
}
$conexion->close();
