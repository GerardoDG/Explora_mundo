<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"];
    $rfc = $_POST["rfc"];
    $curp = $_POST["curp"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $fecha = date("Y-m-d");
    $resultadoRFC = validarRFC($rfc);
    $resultadoCURP = validarCURP($curp);
    $resultadoTEXTOS = validarQueNombreyApellidosSoloTengaTexto($nombre, $apellido_paterno, $apellido_materno);

    if (!$resultadoRFC || !$resultadoCURP || !$resultadoTEXTOS) {
        echo "Datos incorrectos";
    } else {

        try {
            $sql = $conexion->query(" insert into tblcliente (NOMBRE, APELLIDO_PATERNO, APELLIDO_MATERNO, RFC, CURP, FECHA_REGISTRO, CORREO, CONTRASENA) values ('$nombre', '$apellido_paterno', '$apellido_materno', '$rfc', '$curp', '$fecha', '$correo', '$contrasena') ");
        } catch (Exception $e) {
            echo $e->getMessage();
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
