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

          $sql = "SELECT * FROM municipio WHERE idMuni=" . $_GET['idMuni'];
          $resultado = $conexion->query($sql);
          $row = $resultado->fetch_assoc();
      ?>

      <input type="Hidden" class="form-control" name="idMuni" value="<?php echo $row['idMuni']; ?>">
      <div class="mb-3">
              <label class="form-label">ID del departamento</label>
              <input type="text" class="form-control" id="idMuni" name="idMuni" value="<?php echo $row['idMuni']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Nombre del departamento</label>
          <input type="text" class="form-control" id="nombreMuni" name="nombreMuni" value="<?php echo $row['nombreMuni']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Descripcion del departamento</label>
          <input type="text" class="form-control" id="descriMuni" name="descriMuni" value="<?php echo $row['descriMuni']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Nomenclatura del departamento</label>
          <input type="text" class="form-control" id="nomenMuni" name="nomenMuni" value="<?php echo $row['nomenMuni']; ?>">
      </div>
    
      <label>id pais</label>
        <select class="form-select mb-3" aria-label="Default select example" name="idDepto">
        <option selected disabled>--Seleccione departamento--</option>
          <?php
          include("../conexion.php");

          $sql3 = "SELECT * FROM departamento WHERE idDepto=" . $row['idDepto'];
          $resultado3 = $conexion->query($sql3);

          $row3 = $resultado3->fetch_assoc();

          echo "<option selected value='" . $row3['idDepto'] . "'>" . $row3['nombreDepto'] . "</option>";

          $sql4 = "SELECT * FROM departamento";
          $resultado4 = $conexion->query($sql4);

          while ($Fila = $resultado4->fetch_array()) {
            echo "<option value='" . $Fila['idDepto'] . "'>" . $Fila['nombreDepto'] . "</option>";
          }
          ?>
        </select>

    <div class="text-center">
      <button type="submit" class="btn btn-danger">AGREGAR</button>
      <a href="./municipio.php" class="btn btn-dark">REGRESAR</a>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>