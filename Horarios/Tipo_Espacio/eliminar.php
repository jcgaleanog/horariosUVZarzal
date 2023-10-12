<?php
    include ("../conexion.php");

    $cod = $_GET['idTipoEsp'];
    $sql = "DELETE FROM tipoespacio WHERE idTipoEsp = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:tipo_Espacio.php");
    }
?>