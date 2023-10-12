<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar nueva asignacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text center">Agregar una nueva asignacion</h1>
    <br>
    <div class="container">
        <form action="insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Id docente asignado</label>
                <input type="text" class="form-control" id="idDocAsig" name="idDocAsig">
            </div>

            <label for="">ID Docente</label>
            <select class="form-select mb-3" name="idDoc">
                <option selected disabled>--Seleccionar id docente--</option>
                <?php
                include("../conexion.php");

                $sql = $conexion->query("SELECT * FROM docente");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['idDoc'] . "'>" . $resultado['nombreDoc'] . "</option>";
                }
                ?>
            </select>

            <label for="">ID Asignatura</label>
            <select class="form-select mb-3" name="idAsig">
                <option selected disabled>--Seleccionar id asignatura--</option>
                <?php
                include("../conexion.php");

                $sql = $conexion->query("SELECT * FROM asignatura");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['idAsig'] . "'>" . $resultado['nombreAsig'] . "</option>";
                }
                ?>
            </select>

            <label for="">ID Espacio</label>
            <select class="form-select mb-3" name="idEsp">
                <option selected disabled>--Seleccionar id espacio--</option>
                <?php
                include("../conexion.php");

                $sql = $conexion->query("SELECT * FROM espacio");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['idEsp'] . "'>" . $resultado['idTipoEsp'] . "</option>";
                }
                ?>
            </select>

            <div class="form-group mb-3">
                <label for="">Dia asignacion horario</label>
                <input type="date" name="diaAsigHorario" class="form-control" />
            </div>

            <div class="form-group mb-3">
                <label for="">Hora asignacion horario</label>
                <input type="time" name="horaAsigHorario" class="form-control" />
            </div>

            <div class="form-group mb-3">
                <label for="">Fecha registro</label>
                <input type="date" name="fechaRegistro" class="form-control" />
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="./docenteAsignacionHorario.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>