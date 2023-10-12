<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar nuevo tipo de espacio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text center">Agregar un nuevo tipo de espacio</h1>
    <br>
    <div class="container">
        <form action="insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Id tipo de espacio</label>
                <input type="text" class="form-control" id="idTipoEsp" name="idTipoEsp">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre del Tipo de Espacio</label>
                <input type="text" class="form-control" id="nombreTipoEsp" name="nombreTipoEsp">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion del Tipo de Espacio</label>
                <input type="text" class="form-control" id="descriTipoEsp" name="descriTipoEsp">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomenclatura del Tipo de Espacio</label>
                <input type="text" class="form-control" id="nomenTipoEsp" name="nomenTipoEsp">
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="./tipo_Espacio.php" class="btn btn-dark">Regresar</a>
            </div>     
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>