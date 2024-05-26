<?php
include "../../modelo/conexion_bd.php";
$id = $_GET['id'];
$sql = $conexion->query(" select * from tblavion where ID_AVION = $id ");
$datos = $sql->fetch_object();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serie = $_POST["serie"];
    $modelo = $_POST["modelo"];
    $capacidad = $_POST["capacidad"];
    $empresa = $_POST["empresa"];
    if ($_POST["capacidad"] < 0 || $_POST["capacidad"] == "" || $_POST["capacidad"] > 80) {
        echo "Capacidad de asientos no válida";
    } else {
        $sql = "UPDATE tblavion SET NUMERO_SERIE = '$serie', MODELO = '$modelo', CAPACIDAD_ASIENTOS = '$capacidad', EMPRESA_PROPIETARIA = '$empresa' WHERE ID_AVION = $id";
        $conexion->query($sql);
    
    }
}
