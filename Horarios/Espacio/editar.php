<?php
    include_once("../conexion.php");

    $idEsp = $_POST['idEsp'];
    $idTipoEsp = $_POST['idTipoEsp'];
    $codUbi = $_POST['codUbi'];
    $capacidad = $_POST['capacidad'];
    $piso = $_POST['piso'];
    $cumpleInclusion = $_POST['cumpleInclusion'];

    $sql = "UPDATE espacio SET  
                    idTipoEsp = '".$idTipoEsp."', 
                    codUbi = '".$codUbi."', 
                    piso = '".$piso."',
                    cumpleInclusion = '".$cumpleInclusion."' WHERE idEsp =".$idEsp."";

    if ($resultado = $conexion->query($sql)){
        header("location:espacio.php");
    }
?>