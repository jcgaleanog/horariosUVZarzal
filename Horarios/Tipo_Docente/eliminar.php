<?php
    include ("../conexion.php");

    $cod = $_GET['idTipoDoc'];
    $sql = "DELETE FROM tipodocente WHERE idTipoDoc = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:tipo_Docente.php");
    }
?>