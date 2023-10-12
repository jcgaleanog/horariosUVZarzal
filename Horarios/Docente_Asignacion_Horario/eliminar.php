<?php
    include ("../conexion.php");

    $cod = $_GET['idDocAsig'];
    $sql = "DELETE FROM docasighorario WHERE idDocAsig = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:docenteAsignacionHorario.php");
    }
?>