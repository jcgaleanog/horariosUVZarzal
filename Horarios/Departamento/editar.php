<?php
    include_once("../conexion.php");

    $idDepto = $_POST['idDepto'];
    $nombreDepto = $_POST['nombreDepto'];
    $descriDepto = $_POST['descriDepto'];
    $nomenDepto = $_POST['nomenDepto'];
    $idPais = $_POST['idPais'];

    $sql = "UPDATE departamento SET 
                    nombreDepto = '".$nombreDepto."', 
                    descriDepto = '".$descriDepto."', 
                    nomenDepto = '".$nomenDepto."', 
                    idPais = '".$idPais."' WHERE idDepto =".$idDepto."";

    if ($resultado = $conexion->query($sql)){
        header("location:departamento.php");
    }
?>