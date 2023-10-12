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
    <h1>Crear Espacio</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Espacio</th>
                    <th scope="col">Id tipo espacio</th>
                    <th scope="col">nombre tipo espacio</th>
                    <th scope="col">Codigo Ubicacion</th>
                    <th scope="col">nombre Ubicacion</th>
                    <th scope="col">capacidad</th>
                    <th scope="col">piso</th>
                    <th scope="col">Cumple Inclusion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require ('../conexion.php');
                $sql = $conexion->query("SELECT * FROM espacio
                        INNER JOIN tipoespacio ON espacio.idTipoEsp = tipoespacio.idTipoEsp
                        INNER JOIN ubicacion ON espacio.codUbi = ubicacion.codUbi");

                while ($resultado = $sql->fetch_assoc()){
                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado ['idEsp']?></th>
                        <th scope="row"><?php echo $resultado ['idTipoEsp']?></th>
                        <th scope="row"><?php echo $resultado ['nombreTipoEsp']?></th>
                        <th scope="row"><?php echo $resultado ['codUbi']?></th>
                        <th scope="row"><?php echo $resultado ['nombreUbi']?></th>
                        <th scope="row"><?php echo $resultado ['capacidad']?></th>
                        <th scope="row"><?php echo $resultado ['piso']?></th>
                        <th scope="row"><?php echo $resultado ['cumpleInclusion']?></th>
                        <th>
                            <a href="modificar.php?idEsp=<?php echo $resultado['idEsp']?>" class="btn btn-warning">Modificar</a>
                            <a href="eliminar.php?idEsp=<?php echo $resultado['idEsp']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="container">
            <a href="agregar.php" class="btn btn-success">Agregar espacio</a>
            <a href="../admin.php" class="btn btn-success">inicio</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>