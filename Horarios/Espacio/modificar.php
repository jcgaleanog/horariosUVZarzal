<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Espacio Ingresado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h1 class="tect-center" style="background-color: black; color: white; border-radius:  5px;">Editar Espacio</h1>
  <br>
  <form class="container" action="editar.php" method="post">
      <?php
          include('../conexion.php');

          $sql = "SELECT * FROM espacio WHERE idEsp=" . $_GET['idEsp'];
          $resultado = $conexion->query($sql);
          $row = $resultado->fetch_assoc();
      ?>

      <input type="Hidden" class="form-control" name="idEsp" value="<?php echo $row['idEsp']; ?>">
      <div class="mb-3">
              <label class="form-label">ID del espacio</label>
              <input type="text" class="form-control" id="idEsp" name="idEsp" value="<?php echo $row['idEsp']; ?>">
      </div>

      <label>id Tipo de Espacio</label>
        <select class="form-select mb-3" aria-label="Default select example" name="idTipoEsp">
        <option selected disabled>--Seleccione tipo de Espacio--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM tipoespacio WHERE idTipoEsp=" . $row['idTipoEsp'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['idTipoEsp'] . "'>" . $row3['nombreTipoEsp'] . "</option>";

          $sql4 = "SELECT * FROM tipoespacio";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['idTipoEsp'] . "'>" . $Fila['nombreTipoEsp'] . "</option>";
          }
          ?>
        </select>

        <label>Codigo Ubicacion</label>
        <select class="form-select mb-3" aria-label="Default select example" name="codUbi">
        <option selected disabled>--Seleccione codigo ubicacion--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM ubicacion WHERE codUbi=" . $row['codUbi'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['codUbi'] . "'>" . $row3['nombreUbi'] . "</option>";

          $sql4 = "SELECT * FROM ubicacion";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['codUbi'] . "'>" . $Fila['nombreUbi'] . "</option>";
          }
          ?>
        </select>

      <div class="mb-3">
          <label class="form-label">Capacidad</label>
          <input type="text" class="form-control" id="capacidad" name="capacidad" value="<?php echo $row['capacidad']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Piso</label>
          <input type="text" class="form-control" id="piso" name="piso" value="<?php echo $row['piso']; ?>">
      </div>
      
      <div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">¿Cumple inclusion?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="hijos" name="cumpleInclusion" value="1" <?php if($row['cumpleInclusion']=='1') echo 'checked'; ?>> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="hijos" name="cumpleInclusion" value="0" <?php if($row['cumpleInclusion']=='0') echo 'checked'; ?>> NO
						</label>
					</div>
				</div>
      
    <div class="text-center">
      <button type="submit" class="btn btn-danger">AGREGAR</button>
      <a href="./docente.php" class="btn btn-dark">REGRESAR</a>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>