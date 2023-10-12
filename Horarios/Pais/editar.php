<?php
    include_once("../conexion.php");

    $idPais = $_POST['idPais'];
    $nombrePais = $_POST['nombrePais'];
    $descriPais = $_POST['descriPais'];
    $nomenPais = $_POST['nomenPais'];

    $sql = "UPDATE pais SET 
                    nombrePais = '".$nombrePais."', 
                    descriPais = '".$descriPais."', 
                    nomenPais = '".$nomenPais."' WHERE idPais =".$idPais."";

    if ($resultado = $conexion->query($sql)){
        header("location:pais.php");
    }
?>