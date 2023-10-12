<?php
    include ("../conexion.php");

    $cod = $_GET['idCritDoc'];
    $sql = "DELETE FROM criteriodocente WHERE idCritDoc = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:criterioDocente.php");
    }
?>