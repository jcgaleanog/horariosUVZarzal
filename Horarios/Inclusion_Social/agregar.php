<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar nueva inclusion social</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text center">Agregar una nueva inclusion social</h1>
    <br>
    <div class="container">
        <form action="insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Codigo inclusion social</label>
                <input type="text" class="form-control" id="codInclu" name="codInclu">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre de la inclusion social</label>
                <input type="text" class="form-control" id="nombreInclu" name="nombreInclu">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion de la inclusion social</label>
                <input type="text" class="form-control" id="descriInclu" name="descriInclu">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomenclatura inclusion social</label>
                <input type="text" class="form-control" id="nomenInclu" name="nomenInclu">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="./inclusion.php" class="btn btn-dark">Regresar</a>
            </div>     
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>