<?php
include "../../modelo/conexion_bd.php";
$id = $_GET['id'];
$sql = $conexion->query(" select * from tblcliente where id_cliente = $id ");
$datos = $sql->fetch_object();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"];
    $rfc = $_POST["rfc"];
    $curp = $_POST["curp"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $resultadoRFC = validarRFC($rfc);
    $resultadoCURP = validarCURP($curp);
    $resultadoTEXTOS = validarQueNombreyApellidosSoloTengaTexto($nombre, $apellido_paterno, $apellido_materno);

    if (!$resultadoRFC || !$resultadoCURP || !$resultadoTEXTOS) {
        echo "Datos incorrectos";
    } else {


        $sql = $conexion->query(" update tblcliente set NOMBRE = '$nombre', APELLIDO_PATERNO = '$apellido_paterno', APELLIDO_MATERNO = '$apellido_materno', RFC = '$rfc', CURP = '$curp', CORREO = '$correo', CONTRASENA = '$contrasena' where id_cliente = $id ");
        if ($sql) {
            
        } else {
            echo "Error al modificar cliente";
        }
    }
    $conexion->close();
}


function validarRFC($rfc)
{
    if (strlen($rfc) == 13) {
        return true;
    } else {
        return false;
    }
}

function validarCURP($curp)
{
    if (strlen($curp) == 18) {
        return true;
    } else {
        return false;
    }
}

function validarQueNombreyApellidosSoloTengaTexto($nombre, $apellido_paterno, $apellido_materno)
{
    if (preg_match("/^[a-zA-Z]+$/", $nombre) && preg_match("/^[a-zA-Z]+$/", $apellido_paterno) && preg_match("/^[a-zA-Z]+$/", $apellido_materno)) {
        return true;
    } else {
        return false;
    }
}
