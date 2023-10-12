<?php
    require ('../conexion.php');

    $idTipoDoc = $_POST['idTipoDoc'];
    $nombreTipoDoc = $_POST['nombreTipoDoc'];
    $descriTipoDoc = $_POST['descTipoDoc'];
    $nomenTipoDoc = $_POST['nomenTipoDoc'];

    $sql = "INSERT INTO tipodocente(idTipoDoc, nombreTipoDoc, descTipoDoc, nomenTipoDoc) 
            VALUES ('$idTipoDoc', '$nombreTipoDoc', '$descriTipoDoc', '$nomenTipoDoc')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: tipo_Docente.php");
    }else{
        echo "Datos no ingresados";
    }
?>