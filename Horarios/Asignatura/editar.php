<?php
    include_once("../conexion.php");

    $idAsig = $_POST['idAsig'];
    $codAsig = $_POST['codAsig'];
    $nombreAsig = $_POST['nombreAsig'];
    $codProg = $_POST['codProg'];
    $periodoAcade = $_POST['periodoAcade'];
    $codInclu = $_POST['codInclu'];

    $sql = "UPDATE asignatura SET  
                    codAsig = '".$codAsig."', 
                    nombreAsig = '".$nombreAsig."', 
                    codProg = '".$codProg."',
                    periodoAcade = '".$periodoAcade."',
                    codInclu = '".$codInclu."' WHERE idAsig =".$idAsig."";

    if ($resultado = $conexion->query($sql)){
        header("location:asignatura.php");
    }
?>