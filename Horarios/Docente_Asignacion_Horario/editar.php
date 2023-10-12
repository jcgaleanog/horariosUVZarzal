<?php
    include_once("../conexion.php");

    $idDocAsig = $_POST['idDocAsig'];
    $idDoc = $_POST['idDoc'];
    $idAsig = $_POST['idAsig'];
    $idEsp = $_POST['idEsp'];
    $diaAsigHorario = $_POST['diaAsigHorario'];
    $horaAsigHorario = $_POST['horaAsigHorario'];
    $fechaRegistro = $_POST['fechaRegistro'];

    $sql = "UPDATE docasighorario SET 
                    idDoc = '".$idDoc."', 
                    idAsig = '".$idAsig."',
                    idEsp = '".$idEsp."',
                    diaAsigHorario = '".$diaAsigHorario."',
                    horaAsigHorario = '".$horaAsigHorario."', 
                    fechaRegistro = '".$fechaRegistro."' WHERE idDocAsig =".$idDocAsig."";

    if ($resultado = $conexion->query($sql)){
        header("location:docenteAsignacioHorario.php");
    }
?>