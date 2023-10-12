<?php
    require ('../conexion.php');

    $idCritDoc = $_POST['idCritDoc'];
    $diasHorario = $_POST['diasHorario'];
    $idDoc = $_POST['idDoc'];
    $fechaRegistroCri = $_POST['fechaRegistroCri'];
    $codInclu = $_POST['codInclu'];

    $sql = "INSERT INTO criteriodocente(idCritDoc, diasHorario, idDoc,  fechaRegistroCri, codInclu) 
            VALUES ('$idCritDoc', '$diasHorario', '$idCritDoc', '$fechaRegistroCri', '$codInclu')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: criterioDocente.php");
    }else{
        echo "Datos no ingresados";
    }
?>