<?php
    include ("../conexion.php");

    $cod = $_GET['idDepto'];
    $sql = "DELETE FROM departamento WHERE idDepto = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:departamento.php");
    }
?>