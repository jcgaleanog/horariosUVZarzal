<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Asignatura Ingresada</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h1 class="tect-center" style="background-color: black; color: white; border-radius:  5px;">Editar Asignatura</h1>
  <br>
  <form class="container" action="editar.php" method="post">
      <?php
          include('../conexion.php');

          $sql = "SELECT * FROM asignatura WHERE idAsig=" . $_GET['idAsig'];
          $resultado = $conexion->query($sql);
          $row = $resultado->fetch_assoc();
      ?>

      <input type="Hidden" class="form-control" name="idAsig" value="<?php echo $row['idAsig']; ?>">
      
      <div class="mb-3">
              <label class="form-label">ID asignatura</label>
              <input type="text" class="form-control" id="idAsig" name="idAsig" value="<?php echo $row['idAsig']; ?>">
      </div>
      
      <div class="mb-3">
              <label class="form-label">Codigo asignatura</label>
              <input type="text" class="form-control" id="codAsig" name="codAsig" value="<?php echo $row['codAsig']; ?>">
      </div>

      <div class="mb-3">
              <label class="form-label">Nombre asignatura</label>
              <input type="text" class="form-control" id="nombreAsig" name="nombreAsig" value="<?php echo $row['nombreAsig']; ?>">
      </div>

      <label>Codigo Programa</label>
        <select class="form-select mb-3" aria-label="Default select example" name="codProg">
        <option selected disabled>--Seleccione codigo del programa--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM programa WHERE codProg=" . $row['codProg'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['codProg'] . "'>" . $row3['nombreProg'] . "</option>";

          $sql4 = "SELECT * FROM programa";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['codProg'] . "'>" . $Fila['nombreProg'] . "</option>";
          }
          ?>
        </select>

        <div class="mb-3">
              <label class="form-label">Periodo Academico</label>
              <input type="text" class="form-control" id="periodoAcade" name="periodoAcade" value="<?php echo $row['periodoAcade']; ?>">
        </div>

        <label>Codigo Inclusion</label>
        <select class="form-select mb-3" aria-label="Default select example" name="codInclu">
        <option selected disabled>--Seleccione codigo inclusion social--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM inclusionsocial WHERE codInclu=" . $row['codInclu'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['codInclu'] . "'>" . $row3['nombreInclu'] . "</option>";

          $sql4 = "SELECT * FROM inclusionsocial";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['codInclu'] . "'>" . $Fila['nombreInclu'] . "</option>";
          }
          ?>
        </select>
    <div class="text-center">
      <button type="submit" class="btn btn-danger">AGREGAR</button>
      <a href="./asignatura.php" class="btn btn-dark">REGRESAR</a>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>