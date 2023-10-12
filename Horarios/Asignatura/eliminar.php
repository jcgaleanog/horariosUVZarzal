<?php
    include ("../conexion.php");

    $cod = $_GET['idAsig'];
    $sql = "DELETE FROM asignatura WHERE idAsig = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:asignatura.php");
    }
?>