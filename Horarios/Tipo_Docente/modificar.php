<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar tipo de docente ingresado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="tect-center" style="background-color: black; color: white; border-radius:  5px;">Editar Tipo de Docente</h1>
    <br>
    <form class="container" action="editar.php" method="post">
        <?php
            include ('../conexion.php');

            $sql = "SELECT * FROM tipodocente WHERE idTipoDoc=".$_GET['idTipoDoc'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="idTipoDoc" value="<?php echo $row['idTipoDoc']; ?>">
        <div class="mb-3">
                <label class="form-label">ID tipo de docente</label>
                <input type="text" class="form-control" id="idTipoDoc" name="idTipoDoc" value="<?php echo $row['idTipoDoc'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre del tipo de docente</label>
                <input type="text" class="form-control" id="nombreTipoDoc" name="nombreTipoDoc" value="<?php echo $row['nombreTipoDoc'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion del Tipo de Docente</label>
                <input type="text" class="form-control" id="descTipoDoc" name="descTipoDoc" value="<?php echo $row['descTipoDoc'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomenclatura del tipo de docente</label>
                <input type="text" class="form-control" id="nomenTipoDoc" name="nomenTipoDoc" value="<?php echo $row['nomenTipoDoc'];?>">
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-danger">AGREGAR</button>
                <a href="./tipo_Docente.php" class="btn btn-dark">REGRESAR</a>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>