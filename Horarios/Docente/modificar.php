<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Docente Ingresado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h1 class="tect-center" style="background-color: black; color: white; border-radius:  5px;">Editar Docente</h1>
  <br>
  <form class="container" action="editar.php" method="post">
      <?php
          include('../conexion.php');

          $sql = "SELECT * FROM docente WHERE idDoc=" . $_GET['idDoc'];
          $resultado = $conexion->query($sql);
          $row = $resultado->fetch_assoc();
      ?>

      <input type="Hidden" class="form-control" name="idDoc" value="<?php echo $row['idDoc']; ?>">
      <div class="mb-3">
              <label class="form-label">ID del docente</label>
              <input type="text" class="form-control" id="idDoc" name="idDoc" value="<?php echo $row['idDoc']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Cedula del docente</label>
          <input type="text" class="form-control" id="cedulaDoc" name="cedulaDoc" value="<?php echo $row['cedulaDoc']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Nombre del docente</label>
          <input type="text" class="form-control" id="nombreDoc" name="nombreDoc" value="<?php echo $row['nombreDoc']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Localizacion del docente</label>
          <input type="text" class="form-control" id="localDoc" name="localDoc" value="<?php echo $row['localDoc']; ?>">
      </div>
    
      <label>id Tipo de Docente</label>
        <select class="form-select mb-3" aria-label="Default select example" name="idTipoDoc">
        <option selected disabled>--Seleccione tipo de docente--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM tipodocente WHERE idTipoDoc=" . $row['idTipoDoc'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['idTipoDoc'] . "'>" . $row3['nombreTipoDoc'] . "</option>";

          $sql4 = "SELECT * FROM tipodocente";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['idTipoDoc'] . "'>" . $Fila['nombreTipoDoc'] . "</option>";
          }
          ?>
        </select>
        <label>id Municipio</label>
        <select class="form-select mb-3" aria-label="Default select example" name="idMuni">
        <option selected disabled>--Seleccione id municipio--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM municipio WHERE idMuni=" . $row['idMuni'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['idMuni'] . "'>" . $row3['nombreMuni'] . "</option>";

          $sql4 = "SELECT * FROM municipio";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['idMuni'] . "'>" . $Fila['nombreMuni'] . "</option>";
          }
          ?>
        </select>

    <div class="text-center">
      <button type="submit" class="btn btn-danger">AGREGAR</button>
      <a href="./docente.php" class="btn btn-dark">REGRESAR</a>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>