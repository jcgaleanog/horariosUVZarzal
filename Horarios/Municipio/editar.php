<?php
    include_once("../conexion.php");

    $idMuni = $_POST['idMuni'];
    $nombreMuni = $_POST['nombreMuni'];
    $descriMuni = $_POST['descriMuni'];
    $nomenMuni = $_POST['nomenMuni'];
    $idDepto = $_POST['idDepto'];

    $sql = "UPDATE municipio SET 
                    nombreMuni = '".$nombreMuni."', 
                    descriMuni = '".$descriMuni."', 
                    nomenMuni = '".$nomenMuni."', 
                    idDepto = '".$idDepto."' WHERE idMuni =".$idMuni."";

    if ($resultado = $conexion->query($sql)){
        header("location:municipio.php");
    }
?>