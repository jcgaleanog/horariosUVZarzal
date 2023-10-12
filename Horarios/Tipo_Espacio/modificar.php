<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Tipo de Espacio Ingresado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="tect-center" style="background-color: black; color: white; border-radius:  5px;">Editar Programa Academico</h1>
    <br>
    <form class="container" action="editar.php" method="post">
        <?php
            include ('../conexion.php');

            $sql = "SELECT * FROM tipoespacio WHERE idTipoEsp=".$_GET['idTipoEsp'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="idTipoEsp" value="<?php echo $row['idTipoEsp']; ?>">
        <div class="mb-3">
                <label class="form-label">ID del Tipo de Espacio</label>
                <input type="text" class="form-control" id="idTipoEsp" name="idTipoEsp" value="<?php echo $row['idTipoEsp'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre del Tipo de Espacio</label>
                <input type="text" class="form-control" id="nombreTipoEsp" name="nombreTipoEsp" value="<?php echo $row['nombreTipoEsp'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion del Tipo de Espacio</label>
                <input type="text" class="form-control" id="descriTipoEsp" name="descriTipoEsp" value="<?php echo $row['descriTipoEsp'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomenclatura del Tipo de Espacio</label>
                <input type="text" class="form-control" id="nomenTipoEsp" name="nomenTipoEsp" value="<?php echo $row['nomenTipoEsp'];?>">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">AGREGAR</button>
                <a href="./tipo_Espacio.php" class="btn btn-dark">REGRESAR</a>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>