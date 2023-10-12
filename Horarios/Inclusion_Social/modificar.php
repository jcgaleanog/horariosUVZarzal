<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar inclusion social ingresada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="tect-center" style="background-color: black; color: white; border-radius:  5px;">Editar Inclusion social</h1>
    <br>
    <form class="container" action="editar.php" method="post">
        <?php
            include ('../conexion.php');

            $sql = "SELECT * FROM inclusionsocial WHERE codInclu=".$_GET['codInclu'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="codInclu" value="<?php echo $row['codInclu']; ?>">
        <div class="mb-3">
                <label class="form-label">Codigo de la inclusion social</label>
                <input type="text" class="form-control" id="codInclu" name="codInclu" value="<?php echo $row['codInclu'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre de la inclusion social</label>
                <input type="text" class="form-control" id="nombreInclu" name="nombreInclu" value="<?php echo $row['nombreInclu'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion de la inclusion social</label>
                <input type="text" class="form-control" id="descriInclu" name="descriInclu" value="<?php echo $row['descriInclu'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomenclatura de la inclusion social</label>
                <input type="text" class="form-control" id="nomenInclu" name="nomenInclu" value="<?php echo $row['nomenInclu'];?>">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">AGREGAR</button>
                <a href="./inclusion.php" class="btn btn-dark">REGRESAR</a>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>