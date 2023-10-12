<?php
    include ("../conexion.php");

    $cod = $_GET['codUbi'];
    $sql = "DELETE FROM ubicacion WHERE codUbi = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:ubicacion.php");
    }
?>