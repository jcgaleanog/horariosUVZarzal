<?php
    require ('../conexion.php');

    $codProg = $_POST['codProg'];
    $nombreProg = $_POST['nombreProg'];
    $descriProg = $_POST['descriProg'];
    $SNIES = $_POST['SNIES'];
    $jornada = $_POST['jornada'];
    $idDocApoyo = $_POST['idDocApoyo'];

    $sql = "INSERT INTO programa(codProg, nombreProg, descriProg, SNIES, jornada, idDocApoyo) 
            VALUES ('$codProg', '$nombreProg', '$descriProg', '$SNIES', '$jornada', '$idDocApoyo')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: programa.php");
    }else{
        echo "Datos no ingresados";
    }
?>