<?php
    include_once("../conexion.php");

    $codInclu = $_POST['codInclu'];
    $nombreInclu = $_POST['nombreInclu'];
    $descriInclu = $_POST['descriInclu'];
    $nomenInclu = $_POST['nomenInclu'];

    $sql = "UPDATE inclusionsocial SET 
                    nombreInclu = '".$nombreInclu."', 
                    descriInclu = '".$descriInclu."', 
                    nomenInclu = '".$nomenInclu."' WHERE codInclu =".$codInclu."";

    if ($resultado = $conexion->query($sql)){
        header("location:inclusion.php");
    }
?>