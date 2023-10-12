<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asignacion de horarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1>Crear programa academico</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">descripción</th>
                    <th scope="col">SNIES</th>
                    <th scope="col">Jornada</th>
                    <th scope="col">ID docente apoyo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require ('../conexion.php');
                $sql = $conexion->query("SELECT * FROM programa");

                while ($resultado = $sql->fetch_assoc()){
                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado ['codProg']?></th>
                        <th scope="row"><?php echo $resultado ['nombreProg']?></th>
                        <th scope="row"><?php echo $resultado ['descriProg']?></th>
                        <th scope="row"><?php echo $resultado ['SNIES']?></th>
                        <th scope="row"><?php echo $resultado ['jornada']?></th>
                        <th scope="row"><?php echo $resultado ['idDocApoyo']?></th>
                        <th>
                            <a href="modificar.php?codProg=<?php echo $resultado['codProg']?>" class="btn btn-warning">Modificar</a>
                            <a href="eliminar.php?codProg=<?php echo $resultado['codProg']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="container">
            <a href="agregar.php" class="btn btn-success">Agregar programa</a>
            <a href="../admin.php" class="btn btn-success">inicio</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>