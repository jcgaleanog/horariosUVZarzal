<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar ubicacion Ingresado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="tect-center" style="background-color: black; color: white; border-radius:  5px;">Editar Ubicacion</h1>
    <br>
    <form class="container" action="editar.php" method="post">
        <?php
            include ('../conexion.php');

            $sql = "SELECT * FROM ubicacion WHERE codUbi=".$_GET['codUbi'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="codUbi" value="<?php echo $row['codUbi']; ?>">
        <div class="mb-3">
                <label class="form-label">Codigo de la ubicacion</label>
                <input type="text" class="form-control" id="codUbi" name="codUbi" value="<?php echo $row['codUbi'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre de la ubicacion</label>
                <input type="text" class="form-control" id="nombreUbi" name="nombreUbi" value="<?php echo $row['nombreUbi'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion de la ubicacion</label>
                <input type="text" class="form-control" id="descriUbi" name="descriUbi" value="<?php echo $row['descriUbi'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomenclatura de la ubicacion</label>
                <input type="text" class="form-control" id="nomenUbi" name="nomenUbi" value="<?php echo $row['nomenUbi'];?>">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">AGREGAR</button>
                <a href="./ubicacion.php" class="btn btn-dark">REGRESAR</a>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>