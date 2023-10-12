<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Asignacion Ingresada</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h1 class="tect-center" style="background-color: black; color: white; border-radius:  5px;">Editar Asignacion</h1>
  <br>
  <form class="container" action="editar.php" method="post">
      <?php
          include('../conexion.php');

          $sql = "SELECT * FROM docasighorario WHERE idDocAsig=" . $_GET['idDocAsig'];
          $resultado = $conexion->query($sql);
          $row = $resultado->fetch_assoc();
      ?>

      <input type="Hidden" class="form-control" name="idDocAsig" value="<?php echo $row['idDocAsig']; ?>">
      <div class="mb-3">
              <label class="form-label">ID Asignacion Docente</label>
              <input type="text" class="form-control" id="idDocAsig" name="idDocAsig" value="<?php echo $row['idDocAsig']; ?>">
      </div>
      
      <label>ID Docente</label>
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

        <label>ID Asignatura</label>
        <select class="form-select mb-3" aria-label="Default select example" name="idAsig">
        <option selected disabled>--Seleccione id de la asignatura--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM asignatura WHERE idAsig=" . $row['idAsig'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['idAsig'] . "'>" . $row3['nombreAsig'] . "</option>";

          $sql4 = "SELECT * FROM asignatura";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['idAsig'] . "'>" . $Fila['nombreAsig'] . "</option>";
          }
          ?>
        </select>

        <label>ID Espacio</label>
        <select class="form-select mb-3" aria-label="Default select example" name="idEsp">
        <option selected disabled>--Seleccione id del espacio--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM espacio WHERE idEsp=" . $row['idEsp'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['idEsp'] . "'>" . $row3['idTipoEsp'] . "</option>";

          $sql4 = "SELECT * FROM espacio";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['idEsp'] . "'>" . $Fila['idTipoEsp'] . "</option>";
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
      <button type="submit" class="btn btn-danger">AGREGAR</button>
      <a href="./docenteAsignacionHorario.php" class="btn btn-dark">REGRESAR</a>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>