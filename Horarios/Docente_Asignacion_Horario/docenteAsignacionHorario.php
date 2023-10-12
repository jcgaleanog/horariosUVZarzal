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
                    <th scope="col">ID Docente Asignatura</th>
                    <th scope="col">ID Docente</th>
                    <th scope="col">Nombre Docente</th>
                    <th scope="col">ID Asignatura</th>
                    <th scope="col">Nombre Asignatura</th>
                    <th scope="col">ID Espacio</th>
                    <th scope="col">Dia Asignacion Horario</th>
                    <th scope="col">Hora Asignacion Horario</th>
                    <th scope="col">Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require ('../conexion.php');
                $sql = $conexion->query("SELECT * FROM docasighorario
                        INNER JOIN docente ON docasighorario.idDoc = docente.idDoc
                        INNER JOIN asignatura ON docasighorario.idAsig = asignatura.idAsig
                        INNER JOIN espacio ON docasighorario.idEsp = espacio.idEsp");

                while ($resultado = $sql->fetch_assoc()){
                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado ['idDocAsig']?></th>
                        <th scope="row"><?php echo $resultado ['nombreDoc']?></th>
                        <th scope="row"><?php echo $resultado ['idDoc']?></th>
                        <th scope="row"><?php echo $resultado ['nombreAsig']?></th>
                        <th scope="row"><?php echo $resultado ['idEsp']?></th>
                        <th scope="row"><?php echo $resultado ['diaAsigHorario']?></th>
                        <th scope="row"><?php echo $resultado ['horaAsigHorario']?></th>
                        <th scope="row"><?php echo $resultado ['fechaRegistro']?></th>
                        <th>
                            <a href="modificar.php?idCritDoc=<?php echo $resultado['idDocAsig']?>" class="btn btn-warning">Modificar</a>
                            <a href="eliminar.php?idCritDoc=<?php echo $resultado['idDocAsig']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="container">
            <a href="agregar.php" class="btn btn-success">Agregar Asignacion</a>
            <a href="../admin.php" class="btn btn-success">inicio</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>