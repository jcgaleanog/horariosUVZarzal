<?php
    require ('../conexion.php');

    $idDoc = $_POST['idDoc'];
    $cedulaDoc = $_POST['cedulaDoc'];
    $nombreDoc = $_POST['nombreDoc'];
    $localDoc = $_POST['localDoc'];
    $idTipoDoc = $_POST['idTipoDoc'];
    $idMuni = $_POST['idMuni'];

    $sql = "INSERT INTO docente(idDoc, cedulaDoc, nombreDoc, localDoc, idTipoDoc, idMuni) 
            VALUES ('$idDoc', '$cedulaDoc', '$nombreDoc', '$localDoc', '$idTipoDoc', '$idMuni')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: docente.php");
    }else{
        echo "Datos no ingresados";
    }
?>