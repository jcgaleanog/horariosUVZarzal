<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Criterio Docente Ingresado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h1 class="tect-center" style="background-color: black; color: white; border-radius:  5px;">Editar Criterio Docente</h1>
  <br>
  <form class="container" action="editar.php" method="post">
      <?php
          include('../conexion.php');

          $sql = "SELECT * FROM criteriodocente WHERE idCritDoc=" . $_GET['idCritDoc'];
          $resultado = $conexion->query($sql);
          $row = $resultado->fetch_assoc();
      ?>

      <input type="Hidden" class="form-control" name="idCritDoc" value="<?php echo $row['idCritDoc']; ?>">
      <div class="mb-3">
              <label class="form-label">ID Criterio docente</label>
              <input type="text" class="form-control" id="idCritDoc" name="idCritDoc" value="<?php echo $row['idCritDoc']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Dias horarios</label>
          <input type="text" class="form-control" id="diasHorario" name="diasHorario" value="<?php echo $row['diasHorario']; ?>">
      </div>
      <label>id Docente</label>
        <select class="form-select mb-3" aria-label="Default select example" name="idDoc">
        <option selected disabled>--Seleccione id del docente--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM docente WHERE idDoc=" . $row['idDoc'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['idDoc'] . "'>" . $row3['nombreDoc'] . "</option>";

          $sql4 = "SELECT * FROM docente";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['idDoc'] . "'>" . $Fila['nombreDoc'] . "</option>";
          }
          ?>
        </select>
    
        <div class="form-group mb-3">
                <label for="">Fecha registro criterio</label>
                <input type="date" name="fechaRegistroCri" class="form-control" />
        </div>

        <label>Codigo inclusion social</label>
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
      <a href="./criterioDocente.php" class="btn btn-dark">REGRESAR</a>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>