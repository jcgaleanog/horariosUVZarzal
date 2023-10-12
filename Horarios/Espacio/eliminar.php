<?php
    include ("../conexion.php");

    $cod = $_GET['idEsp'];
    $sql = "DELETE FROM espacio WHERE idEsp = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:espacio.php");
    }
?>