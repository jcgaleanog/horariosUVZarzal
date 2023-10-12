<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar nueva asignatura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text center">Agregar un nueva asignatura</h1>
    <br>
    <div class="container">
        <form action="insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Id de la asignatura</label>
                <input type="text" class="form-control" id="idAsig" name="idAsig">
            </div>

            <div class="mb-3">
                <label class="form-label">Codigo asignatura</label>
                <input type="text" class="form-control" id="codAsig" name="codAsig">
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre asignatura</label>
                <input type="text" class="form-control" id="nombreAsig" name="nombreAsig">
            </div>

            <label for="">Codigo programa</label>
            <select class="form-select mb-3" name="codProg">
                <option selected disabled>--Seleccionar codigo del programa--</option>
                <?php
                include("../conexion.php");

                $sql = $conexion->query("SELECT * FROM programa");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['codProg'] . "'>" . $resultado['nombreProg'] . "</option>";
                }
                ?>
            </select>

            <div class="mb-3">
                <label class="form-label">Periodo academico</label>
                <input type="text" class="form-control" id="periodoAcade" name="periodoAcade">
            </div>

            <label for="">Codigo de inclusion</label>
            <select class="form-select mb-3" name="codInclu">
                <option selected disabled>--Seleccionar codigo de ubicacion--</option>
                <?php
                include("../conexion.php");

                $sql = $conexion->query("SELECT * FROM inclusionsocial");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['codInclu'] . "'>" . $resultado['nombreInclu'] . "</option>";
                }
                ?>
            </select>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="./asignatura.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>