<?php
    require ('../conexion.php');

    $idTipoEsp = $_POST['idTipoEsp'];
    $nombreTipoEsp = $_POST['nombreTipoEsp'];
    $descriTipoEsp = $_POST['descriTipoEsp'];
    $nomenTipoEsp = $_POST['nomenTipoEsp'];

    $sql = "INSERT INTO tipoespacio(idTipoEsp, nombreTipoEsp, descriTipoEsp, nomenTipoEsp) 
            VALUES ('$idTipoEsp', '$nombreTipoEsp', '$descriTipoEsp', '$nomenTipoEsp')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: tipo_Espacio.php");
    }else{
        echo "Datos no ingresados";
    }
?>