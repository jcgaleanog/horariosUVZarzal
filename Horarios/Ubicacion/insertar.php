<?php
    require ('../conexion.php');

    $codUbi = $_POST['codUbi'];
    $nombreUbi = $_POST['nombreUbi'];
    $descriUbi = $_POST['descriUbi'];
    $nomenUbi = $_POST['nomenUbi'];

    $sql = "INSERT INTO ubicacion(codUbi, nombreUbi, descriUbi, nomenUbi) 
            VALUES ('$codUbi', '$nombreUbi', '$descriUbi', '$nomenUbi')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: ubicacion.php");
    }else{
        echo "Datos no ingresados";
    }
?>