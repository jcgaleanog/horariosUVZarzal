<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar nuevo docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text center">Agregar un nuevo docente</h1>
    <br>
    <div class="container">
        <form action="insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Id del docente</label>
                <input type="text" class="form-control" id="idDoc" name="idDoc">
            </div>
            <div class="mb-3">
                <label class="form-label">Cedula del docente</label>
                <input type="text" class="form-control" id="cedulaDoc" name="cedulaDoc">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre del docente</label>
                <input type="text" class="form-control" id="nombreDoc" name="nombreDoc">
            </div>
            <div class="mb-3">
                <label class="form-label">Localizacion del docente</label>
                <input type="text" class="form-control" id="localDoc" name="localDoc">
            </div>
            <label for="">ID Tipo de Docente</label>
            <select class="form-select mb-3" name="idTipoDoc">
                <option selected disabled>--Seleccionar id tipo de docente--</option>
                <?php
                include("../conexion.php");

                $sql = $conexion->query("SELECT * FROM tipodocente");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['idTipoDoc'] . "'>" . $resultado['nombreTipoDoc'] . "</option>";
                }
                ?>
            </select>
            <label for="">ID Municipio</label>
            <select class="form-select mb-3" name="idMuni">
                <option selected disabled>--Seleccionar id municipio--</option>
                <?php
                include("../conexion.php");

                $sql = $conexion->query("SELECT * FROM municipio");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['idMuni'] . "'>" . $resultado['nombreMuni'] . "</option>";
                }
                ?>
            </select>

            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="./docente.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>