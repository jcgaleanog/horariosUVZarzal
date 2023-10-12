<?php
    require ('../conexion.php');

    $codInclu = $_POST['codInclu'];
    $nombreInclu = $_POST['nombreInclu'];
    $descriInclu = $_POST['descriInclu'];
    $nomenInclu = $_POST['nomenInclu'];

    $sql = "INSERT INTO inclusionsocial(codInclu, nombreInclu, descriInclu, nomenInclu) 
            VALUES ('$codInclu', '$nombreInclu', '$descriInclu', '$nomenInclu')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: inclusion.php");
    }else{
        echo "Datos no ingresados";
    }
?>