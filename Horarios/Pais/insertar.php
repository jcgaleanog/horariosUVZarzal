<?php
    require ('../conexion.php');

    $idPais = $_POST['idPais'];
    $nombrePais = $_POST['nombrePais'];
    $descriPais = $_POST['descriPais'];
    $nomenPais = $_POST['nomenPais'];

    $sql = "INSERT INTO pais(idPais, nombrePais, descriPais, nomenPais) 
            VALUES ('$idPais', '$nombrePais', '$descriPais', '$nomenPais')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE){
        header("location: pais.php");
    }else{
        echo "Datos no ingresados";
    }
?>