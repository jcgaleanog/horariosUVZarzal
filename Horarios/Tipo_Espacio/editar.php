<?php
    include_once("../conexion.php");

    $idTipoEsp = $_POST['idTipoEsp'];
    $nombreTipoEsp = $_POST['nombreTipoEsp'];
    $descriTipoEsp = $_POST['descriTipoEsp'];
    $nomenTipoEsp = $_POST['nomenTipoEsp'];

    $sql = "UPDATE tipoespacio SET 
                    nombreTipoEsp = '".$nombreTipoEsp."', 
                    descriProg = '".$descriTipoEsp."', 
                    nomenTipoEsp = '".$nomenTipoEsp."' WHERE codProg =".$idTipoEsp."";

    if ($resultado = $conexion->query($sql)){
        header("location:tipo_Espacio.php");
    }
?>