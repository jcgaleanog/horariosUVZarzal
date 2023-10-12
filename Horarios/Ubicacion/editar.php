<?php
    include_once("../conexion.php");

    $codUbi = $_POST['codUbi'];
    $nombreUbi = $_POST['nombreUbi'];
    $descriUbi = $_POST['descriUbi'];
    $nomenUbi = $_POST['nomenUbi'];

    $sql = "UPDATE ubicacion SET 
                    nombreUbi = '".$nombreUbi."', 
                    descriUbi = '".$descriUbi."', 
                    nomenUbi = '".$nomenUbi."' WHERE codUbi =".$codUbi."";

    if ($resultado = $conexion->query($sql)){
        header("location:ubicacion.php");
    }
?>