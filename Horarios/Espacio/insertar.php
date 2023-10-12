<?php
    require ('../conexion.php');

    $idEsp = $_POST['idEsp'];
    $idTipoEsp = $_POST['idTipoEsp'];
    $codUbi = $_POST['codUbi'];
    $capacidad = $_POST['capacidad'];
    $piso = $_POST['piso'];
    $cumpleInclusion = $_POST['cumpleInclusion'];

    $sql = "INSERT INTO espacio(idEsp, idTipoEsp, codUbi, capacidad, piso, cumpleInclusion) 
            VALUES ('$idEsp', '$idTipoEsp', '$codUbi', '$capacidad', '$piso', '$cumpleInclusion')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: espacio.php");
    }else{
        echo "Datos no ingresados";
    }
?>