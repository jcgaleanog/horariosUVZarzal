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
    <h1>Crear Departamento</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID municipio</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">descripción</th>
                    <th scope="col">Nomenclatura</th>
                    <th scope="col">Nombre Departamento</th>
                    <th scope="col">Id Departamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require ('../conexion.php');
                $sql = $conexion->query("SELECT * FROM municipio
                        INNER JOIN departamento ON municipio.idDepto = departamento.idDepto");

                while ($resultado = $sql->fetch_assoc()){
                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado ['idMuni']?></th>
                        <th scope="row"><?php echo $resultado ['nombreMuni']?></th>
                        <th scope="row"><?php echo $resultado ['descriMuni']?></th>
                        <th scope="row"><?php echo $resultado ['nomenMuni']?></th>
                        <th scope="row"><?php echo $resultado ['nombreDepto']?></th>
                        <th scope="row"><?php echo $resultado ['idDepto']?></th>
                        <th>
                            <a href="modificar.php?idMuni=<?php echo $resultado['idMuni']?>" class="btn btn-warning">Modificar</a>
                            <a href="eliminar.php?idMuni=<?php echo $resultado['idMuni']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="container">
            <a href="agregar.php" class="btn btn-success">Agregar pais</a>
            <a href="../admin.php" class="btn btn-success">inicio</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>