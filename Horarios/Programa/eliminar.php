<?php
    include ("../conexion.php");

    $cod = $_GET['codProg'];
    $sql = "DELETE FROM programa WHERE codProg = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:programa.php");
    }
?>