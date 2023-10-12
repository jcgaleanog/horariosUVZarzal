<?php
    require ('../conexion.php');

    $idDepto = $_POST['idDepto'];
    $nombreDepto = $_POST['nombreDepto'];
    $descriDepto = $_POST['descriDepto'];
    $nomenDepto = $_POST['nomenDepto'];
    $idPais = $_POST['idPais'];

    $sql = "INSERT INTO departamento(idDepto, nombreDepto, descriDepto, nomenDepto, idPais) 
            VALUES ('$idDepto', '$nombreDepto', '$descriDepto', '$nomenDepto', '$idPais')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: departamento.php");
    }else{
        echo "Datos no ingresados";
    }
?>