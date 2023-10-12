<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar nuevo espacio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-black p-2 text-white text center">Agregar un nuevo espacio</h1>
    <br>
    <div class="container">
        <form action="insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Id del espacio</label>
                <input type="text" class="form-control" id="idEsp" name="idEsp">
            </div>

            <label for="">ID Tipo de Espacio</label>
            <select class="form-select mb-3" name="idTipoEsp">
                <option selected disabled>--Seleccionar id tipo de espacio--</option>
                <?php
                include("../conexion.php");

                $sql = $conexion->query("SELECT * FROM tipoespacio");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['idTipoEsp'] . "'>" . $resultado['nombreTipoEsp'] . "</option>";
                }
                ?>
            </select>

            <label for="">Codigo de ubicacion</label>
            <select class="form-select mb-3" name="codUbi">
                <option selected disabled>--Seleccionar codigo de ubicacion--</option>
                <?php
                include("../conexion.php");

                $sql = $conexion->query("SELECT * FROM ubicacion");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['codUbi'] . "'>" . $resultado['nombreUbi'] . "</option>";
                }
                ?>
            </select>

            <div class="mb-3">
                <label class="form-label">capacidad</label>
                <input type="text" class="form-control" id="capacidad" name="capacidad">
            </div>
            
            <div class="mb-3">
                <label class="form-label">piso</label>
                <input type="text" class="form-control" id="piso" name="piso">
            </div>

            <div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">¿Cumple Inclusion?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="cumpleInclu" name="cumpleInclusion" value="1" checked> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="cumpleInclusion" name="cumpleInclusion" value="0"> NO
						</label>
					</div>
				</div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="./espacio.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>