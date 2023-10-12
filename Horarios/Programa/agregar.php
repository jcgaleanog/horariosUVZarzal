<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar nuevo programa academico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text center">Agregar un nuevo programa academico</h1>
    <br>
    <div class="container">
        <form action="insertar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Codigo del Programa Academico</label>
                <input type="text" class="form-control" id="codProg" name="codProg">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre del Programa Academico</label>
                <input type="text" class="form-control" id="nombreProg" name="nombreProg">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion del Programa Academico</label>
                <input type="text" class="form-control" id="descriProg" name="descriProg">
            </div>
            <div class="mb-3">
                <label class="form-label">SNIES del Programa Academico</label>
                <input type="text" class="form-control" id="SNIES" name="SNIES">
            </div>
            <div class="mb-3">
                <label class="form-label">Jornada del Programa Academico</label>
                <input type="text" class="form-control" id="jornada" name="jornada">
            </div>
            <div class="mb-3">
                <label class="form-label">ID del Docente de Apoyo</label>
                <input type="text" class="form-control" id="idDocApoyo" name="idDocApoyo">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="./programa.php" class="btn btn-dark">Regresar</a>
            </div>     
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>