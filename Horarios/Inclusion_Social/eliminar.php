<?php
    include ("../conexion.php");

    $cod = $_GET['codInclu'];
    $sql = "DELETE FROM inclusionsocial WHERE codInclu = '$cod'";

    $query = mysqli_query($conexion, $sql);
    if ($query === TRUE){
        header("location:inclusion.php");
    }
?>