<?php
    require ('../conexion.php');

    $idMuni = $_POST['idMuni'];
    $nombreMuni = $_POST['nombreMuni'];
    $descriDepto = $_POST['descriMuni'];
    $nomenMuni = $_POST['nomenMuni'];
    $idDepto = $_POST['idDepto'];

    $sql = "INSERT INTO municipio(idMuni, nombreMuni, descriMuni, nomenMuni, idDepto) 
            VALUES ('$idMuni', '$nombreMuni', '$descriMuni', '$nomenMuni', '$idDepto')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: municipio.php");
    }else{
        echo "Datos no ingresados";
    }
?>