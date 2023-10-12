<?php
    include ("../conexion.php");

    $cod = $_GET['idDoc'];
    $sql = "DELETE FROM docente WHERE idDoc = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:docente.php");
    }
?>