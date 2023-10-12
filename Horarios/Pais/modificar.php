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

            $sql = "SELECT * FROM pais WHERE idPais=".$_GET['idPais'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="idPais" value="<?php echo $row['idPais']; ?>">
        <div class="mb-3">
                <label class="form-label">Codigo del Pais</label>
                <input type="text" class="form-control" id="idPais" name="idPais" value="<?php echo $row['idPais'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre del Pais</label>
                <input type="text" class="form-control" id="nombrePais" name="nombrePais" value="<?php echo $row['nombrePais'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion del Pais</label>
                <input type="text" class="form-control" id="descriPais" name="descriPais" value="<?php echo $row['descriPais'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomenclatura del Pais</label>
                <input type="text" class="form-control" id="nomenPais" name="nomenPais" value="<?php echo $row['nomenPais'];?>">
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-danger">AGREGAR</button>
                <a href="./pais.php" class="btn btn-dark">REGRESAR</a>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>