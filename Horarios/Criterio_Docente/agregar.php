<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar nuevo criterio docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text center">Agregar un nuevo criterio docente</h1>
    <br>
    <div class="container">
        <form action="insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Id criterio docente</label>
                <input type="text" class="form-control" id="idCritDoc" name="idCritDoc">
            </div>
            <div class="mb-3">
                <label class="form-label">Dias Horarios</label>
                <input type="text" class="form-control" id="diasHorario" name="diasHorario">
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
            <div class="form-group mb-3">
                <label for="">Fecha registro criterio</label>
                <input type="date" name="fechaRegistroCri" class="form-control" />
            </div>
            
            <label for="">Codigo inclusion</label>
            <select class="form-select mb-3" name="codInclu">
                <option selected disabled>--Seleccionar codigo de la inclusion--</option>
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
                <a href="./criterioDocente.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>