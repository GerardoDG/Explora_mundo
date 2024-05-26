<?php
if (!empty($_POST["btnModificarTransporte"])) {
    $placa = $_POST['placa'];
    $capacidad = $_POST['capacidad'];
    $anio = $_POST['anio'];
    $empresa = $_POST['empresa'];
    if ($_POST["capacidad"] < 0 || $_POST["capacidad"] == "" || $_POST["capacidad"] > 80 || $_POST["anio"] < 2000 || $_POST["anio"] == "" || $_POST["anio"] > 2024) {
        echo "Capacidad de asientos no válida o año de fabricación no válido";
    } else {
        $sql = $conexion->query(" update tbltransporte_terrestre set PLACA = '$placa', CAPACIDAD_PASAJEROS = $capacidad, ANIO_FABRICACION = $anio, EMPRESA_PROPIETARIA = '$empresa' where ID_TRANSPTERRESTRE = $id ");
        if ($sql) {
        } else {
            echo "Error al modificar";
        }
    }
}
