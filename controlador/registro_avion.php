<?php


if (!empty($_POST["btnregistro-avion"])) {
    $serie = $_POST["serie"];
    $modelo = $_POST["modelo"];
    $capacidad = $_POST["capacidad"];
    $empresa = $_POST["empresa"];
    if ($_POST["capacidad"] < 0 || $_POST["capacidad"] == "" || $_POST["capacidad"] > 80) {
        echo "Capacidad de asientos no válida";
    } else {
        if (!empty($_POST["serie"]) && !empty($_POST["modelo"]) && !empty($_POST["capacidad"]) && !empty($_POST["empresa"])) {
            try {
                $sql = "INSERT INTO tblavion (NUMERO_SERIE, MODELO, CAPACIDAD_ASIENTOS, EMPRESA_PROPIETARIA) VALUES ('$serie', '$modelo', '$capacidad', '$empresa')";
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            $conexion->query($sql);
        }
    }
}

$conexion->close();
