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
            include ('../conexion.php');

            $sql = "SELECT * FROM programa WHERE codProg=".$_GET['codProg'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="codProg" value="<?php echo $row['codProg']; ?>">
        <div class="mb-3">
                <label class="form-label">Codigo del Programa Academico</label>
                <input type="text" class="form-control" id="codProg" name="codProg" value="<?php echo $row['codProg'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre del Programa Academico</label>
                <input type="text" class="form-control" id="nombreProg" name="nombreProg" value="<?php echo $row['nombreProg'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion del Programa Academico</label>
                <input type="text" class="form-control" id="descriProg" name="descriProg" value="<?php echo $row['descriProg'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">SNIES del Programa Academico</label>
                <input type="text" class="form-control" id="SNIES" name="SNIES" value="<?php echo $row['SNIES'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Jornada del Programa Academico</label>
                <input type="text" class="form-control" id="jornada" name="jornada" value="<?php echo $row['jornada'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">ID del Docente de Apoyo</label>
                <input type="text" class="form-control" id="idDocApoyo" name="idDocApoyo" value="<?php echo $row['idDocApoyo'];?>">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">AGREGAR</button>
                <a href="./programa.php" class="btn btn-dark">REGRESAR</a>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>