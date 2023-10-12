<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Programa Academico Ingresado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <h1 class="tect-center" style="background-color: black; color: white; border-radius:  5px;">Editar Programa Academico</h1>
  <br>
  <form class="container" action="editar.php" method="post">
      <?php
          include('../conexion.php');

          $sql = "SELECT * FROM departamento WHERE idDepto=" . $_GET['idDepto'];
          $resultado = $conexion->query($sql);
          $row = $resultado->fetch_assoc();
      ?>

      <input type="Hidden" class="form-control" name="idDepto" value="<?php echo $row['idDepto']; ?>">
      <div class="mb-3">
              <label class="form-label">ID del departamento</label>
              <input type="text" class="form-control" id="idDepto" name="idDepto" value="<?php echo $row['idDepto']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Nombre del departamento</label>
          <input type="text" class="form-control" id="nombreDepto" name="nombreDepto" value="<?php echo $row['nombreDepto']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Descripcion del departamento</label>
          <input type="text" class="form-control" id="descriDepto" name="descriDepto" value="<?php echo $row['descriDepto']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Nomenclatura del departamento</label>
          <input type="text" class="form-control" id="nomenDepto" name="nomenDepto" value="<?php echo $row['nomenDepto']; ?>">
      </div>
    
      <label>id pais</label>
        <select class="form-select mb-3" aria-label="Default select example" name="idPais">
        <option selected disabled>--Seleccione marcas--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM pais WHERE idPais=" . $row['idPais'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['idPais'] . "'>" . $row3['nombrePais'] . "</option>";

          $sql4 = "SELECT * FROM pais";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['idPais'] . "'>" . $Fila['nombrePais'] . "</option>";
          }
          ?>
        </select>

    <div class="text-center">
      <button type="submit" class="btn btn-danger">AGREGAR</button>
      <a href="./departamento.php" class="btn btn-dark">REGRESAR</a>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>