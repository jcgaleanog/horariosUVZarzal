<?php
    include ("../conexion.php");

    $cod = $_GET['idPais'];
    $sql = "DELETE FROM pais WHERE idPais = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:pais.php");
    }
?>