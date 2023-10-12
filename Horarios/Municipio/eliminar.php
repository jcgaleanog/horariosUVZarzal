<?php
    include ("../conexion.php");

    $cod = $_GET['idMuni'];
    $sql = "DELETE FROM municipio WHERE idMuni = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:municipio.php");
    }
?>