<?php
    include_once("../conexion.php");

    $codProg = $_POST['codProg'];
    $nombreProg = $_POST['nombreProg'];
    $descriProg = $_POST['descriProg'];
    $SNIES = $_POST['SNIES'];
    $jornada = $_POST['jornada'];
    $idDocApoyo = $_POST['idDocApoyo'];

    $sql = "UPDATE programa SET 
                    nombreProg = '".$nombreProg."', 
                    descriProg = '".$descriProg."', 
                    SNIES = '".$SNIES."', 
                    jornada = '".$jornada."', 
                    idDocApoyo = '".$idDocApoyo."' WHERE codProg =".$codProg."";

    if ($resultado = $conexion->query($sql)){
        header("location:programa.php");
    }
?>