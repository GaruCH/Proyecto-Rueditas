<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musica</title>

    <!-- Local -->
    <link rel="stylesheet" href="../plugins/bootstrap4/css/bootstrap.min.css">

    <!-- FontAwesome 4 -->
    <link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="../css/product.css" rel="stylesheet">
</head>

  <body>

    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">

        </a>
        <a class="py-2 d-none d-md-inline-block" href="../index.php">Inicio</a>
        <a class="py-2 d-none d-md-inline-block" href="./artista_registrar.php">Artista</a>
        <a class="py-2 d-none d-md-inline-block" href="./album-registrar.php">Album</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Buscar</a>
      </div>
    </nav>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <h2 class="display-5">Registrar nuevo artista</h2>
          <form acttion="" method="" style="margin-top:5%;margin-bottom:5%">

            <div class="form-row">
              <div class="form-group col-md-12">
                <img src="../img/singer.png" class="img-fluid rounded mx-auto d-block" alt="Sin imagen" width="15%">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                  <label for="inputEmail4">Nombre</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                  <small id="text-error-nombre" class="form-text text-danger"></small>
              </div>
              <div class="form-group col-md-4">
                  <label for="inputEmail4">Apellido Paterno</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Apellido Paterno">
              </div>
              <div class="form-group col-md-4">
                  <label for="inputEmail4">Apellido Materno</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Apellido Materno">
              </div>
            </div>

            
            <div class="form-row">
              <!-- Imágen -->
              <div class="form-group col-md-4">
                <label for="inputEmail4">Imágen del albúm</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                  <label class="custom-file-label" for="validatedCustomFile">Selecciona archivo</label>
                </div>
              </div>

              <!-- Descripcion -->
              <div class="form-group col-md-8">
                <label for="inputEmail4">Biografía artista</label>
                <textarea class="form-control" placeholder="Ingresa la biografía del artista aquí..."></textarea>
              </div>
              
            </div>

            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-dark" type="reset">Limpiar</button>

          </form>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>

</html>
