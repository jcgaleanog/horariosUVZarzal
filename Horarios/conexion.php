<?php
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "horarios";

    $conexion = new mysqli($host, $user, $pass, $db);

    if (!$conexion){
        echo 'No se pudo conectar a la base de datos';
    }
?>