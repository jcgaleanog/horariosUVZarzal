<?php
    include_once("../conexion.php");

    $idCritDoc = $_POST['idCritDoc'];
    $diasHorario = $_POST['diasHorario'];
    $idDoc = $_POST['idDoc'];
    $fechaRegistroCri = $_POST['fechaRegistroCri'];
    $codInclu = $_POST['codInclu'];

    $sql = "UPDATE criteriodocente SET 
                    idCritDoc = '".$idCritDoc."', 
                    diasHorario = '".$diasHorario."', 
                    fechaRegistroCri = '".$fechaRegistroCri."', 
                    codInclu = '".$codInclu."' WHERE idCritDoc =".$idCritDoc."";

    if ($resultado = $conexion->query($sql)){
        header("location:criteriodocente.php");
    }
?>