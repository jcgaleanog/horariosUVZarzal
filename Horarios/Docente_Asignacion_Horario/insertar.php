<?php
    require ('../conexion.php');

    $idDocAsig = $_POST['idDocAsig'];
    $idDoc = $_POST['idDoc'];
    $idAsig = $_POST['idAsig'];
    $idEsp = $_POST['idEsp'];
    $diaAsigHorario = $_POST['diaAsigHorario'];
    $horaAsigHorario = $_POST['horaAsigHorario'];
    $fechaRegistro = $_POST['fechaRegistro'];

    $sql = "INSERT INTO docasighorario(idDocAsig, idDoc, idAsig, idEsp, diaAsigHorario, horaAsigHorario, fechaRegistro) 
            VALUES ('$idDocAsig', '$idDoc', '$idAsig', '$idEsp', '$diaAsigHorario', '$horaAsigHorario', '$fechaRegistro')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: docenteAsignacionHorario.php");
    }else{
        echo "Datos no ingresados";
    }
?>