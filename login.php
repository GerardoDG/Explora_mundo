<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    $password = $_POST["password"];
    
    if ($username === "admin_GEGN" && $password === "ES1821020544") {        
        header("Location: vista/admin/GEGNadmin_home.php");
        exit;
    } else if ($username === "cliente_GEGN" && $password === "ES1821020544") {
        header("Location: vista/cliente/GEGNcliente_home.php");
    } else {
        header("Location: GEGNerror_login.php");
    }
}

?>