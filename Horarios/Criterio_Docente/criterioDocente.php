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
    <h1>Crear Criterio Docente</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID criterio docente</th>
                    <th scope="col">Dias horarios</th>
                    <th scope="col">Id Docente</th>
                    <th scope="col">Nombre Docente</th>
                    <th scope="col">Fecha de registro de criterio</th>
                    <th scope="col">Codigo Inclusion</th>
                    <th scope="col">Nombre Inclusion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require ('../conexion.php');
                $sql = $conexion->query("SELECT * FROM criteriodocente
                        INNER JOIN docente ON criteriodocente.idDoc = docente.idDoc
                        INNER JOIN inclusionsocial ON criteriodocente.codInclu = inclusionsocial.codInclu");

                while ($resultado = $sql->fetch_assoc()){
                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado ['idCritDoc']?></th>
                        <th scope="row"><?php echo $resultado ['diasHorario']?></th>
                        <th scope="row"><?php echo $resultado ['idDoc']?></th>
                        <th scope="row"><?php echo $resultado ['nombreDoc']?></th>
                        <th scope="row"><?php echo $resultado ['fechaRegistroCri']?></th>
                        <th scope="row"><?php echo $resultado ['codInclu']?></th>
                        <th scope="row"><?php echo $resultado ['nombreInclu']?></th>
                        <th>
                            <a href="modificar.php?idCritDoc=<?php echo $resultado['idCritDoc']?>" class="btn btn-warning">Modificar</a>
                            <a href="eliminar.php?idCritDoc=<?php echo $resultado['idCritDoc']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="container">
            <a href="agregar.php" class="btn btn-success">Agregar criterio</a>
            <a href="../admin.php" class="btn btn-success">inicio</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>