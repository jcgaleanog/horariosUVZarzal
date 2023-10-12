<?php
    include_once("../conexion.php");

    $idTipoDoc = $_POST['idTipoDoc'];
    $nombreTipoDoc = $_POST['nombreTipoDoc'];
    $descriTipoDoc = $_POST['descTipoDoc'];
    $nomenTipoDoc = $_POST['nomenTipoDoc'];

    $sql = "UPDATE tipodocente SET 
                    nombreTipoDoc = '".$nombreTipoDoc."', 
                    descTipoDoc = '".$descriTipoDoc."', 
                    nomenTipoDoc = '".$nomenTipoDoc."' WHERE idTipoDoc =".$idTipoDoc."";

    if ($resultado = $conexion->query($sql)){
        header("location:tipo_Docente.php");
    }
?>