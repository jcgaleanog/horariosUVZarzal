<?php
$Usuario = $_POST['usuario'];
$Contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $Usuario;

require ('conexion.php');

$Consulta = "SELECT * FROM usuario where usuario='$Usuario' and contraseña='$Contraseña'";
$Resultado = mysqli_query($conexion, $Consulta);

$filas = mysqli_fetch_array($Resultado);

if ($filas['id_cargo'] == 1) {
    header("location:admin.php");
} else
    if ($filas['id_cargo' == 2]) {
        header("location:docentes.php");
    } else {
        ?>
        <?php
        include("index.html");
        ?>
        <h1 class="bad">Error,contraseña incorrecta</h1>
        <?php
    }
mysqli_free_result($Resultado);
mysqli_close($conexion);