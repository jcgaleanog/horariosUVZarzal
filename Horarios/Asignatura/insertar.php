<?php
    require ('../conexion.php');

    $idAsig = $_POST['idAsig'];
    $codAsig = $_POST['codAsig'];
    $nombreAsig = $_POST['nombreAsig'];
    $codProg = $_POST['codProg'];
    $periodoAcade = $_POST['periodoAcade'];
    $codInclu = $_POST['codInclu'];

    $sql = "INSERT INTO asignatura(idAsig, codAsig, nombreAsig, codProg, periodoAcade, codInclu) 
            VALUES ('$idAsig', '$codAsig', '$nombreAsig', '$codProg', '$periodoAcade', '$codInclu')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: asignatura.php");
    }else{
        echo "Datos no ingresados";
    }
?>