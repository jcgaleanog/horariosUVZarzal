<?php
    include_once("../conexion.php");

    $idDoc = $_POST['idDoc'];
    $cedulaDoc = $_POST['cedulaDoc'];
    $nombreDoc = $_POST['nombreDoc'];
    $localDoc = $_POST['localDoc'];
    $idTipoDoc = $_POST['idTipoDoc'];
    $idMuni = $_POST['idMuni'];

    $sql = "UPDATE docente SET 
                    cedulaDoc = '".$cedulaDoc."', 
                    nombreDoc = '".$nombreDoc."', 
                    localDoc = '".$localDoc."', 
                    idTipoDoc = '".$idTipoDoc."',
                    idMuni = '".$idMuni."' WHERE idDoc =".$idDoc."";

    if ($resultado = $conexion->query($sql)){
        header("location:docente.php");
    }
?>