<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar nuevo departamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text center">Agregar un nuevo departamento</h1>
    <br>
    <div class="container">
        <form action="insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Id del departamento</label>
                <input type="text" class="form-control" id="idDepto" name="idDepto">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre del departamento</label>
                <input type="text" class="form-control" id="nombreDepto" name="nombreDepto">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion del departamento</label>
                <input type="text" class="form-control" id="descriDepto" name="descriDepto">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomenclatura del departamento</label>
                <input type="text" class="form-control" id="nomenDepto" name="nomenDepto">
            </div>
            </select>
            <label for="">ID pais</label>
            <select class="form-select mb-3" name="idPais">
                <option selected disabled>--Seleccionar id pais--</option>
                <?php
                include("../conexion.php");

                $sql = $conexion->query("SELECT * FROM pais");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['idPais'] . "'>" . $resultado['nombrePais'] . "</option>";
                }
                ?>
            </select>

            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="./departamento.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>