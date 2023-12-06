<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musica</title>

    <!-- Local -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

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
        <h2 class="display-5">Detalles: Arena en nuestras manos</h2>
          <form acttion="" method="" style="margin-top:5%;margin-bottom:5%">

            <div class="form-row">
              <div class="form-group col-md-12">
                <img src="../img/transparente-album.jpeg" class="img-fluid rounded mx-auto d-block" alt="Sin imagen" width="15%">
              </div>
            </div>

            <div class="form-row">

            <!-- Ártitsta -->
            <div class="form-group col-md-4">
              <label for="inputState">Artista</label>
              <select id="inputState" class="form-control">
                <option>Selecciona un ártista...</option>
                <option value="" selected>Dread Mar I</option>
              </select>
            </div>

            <!-- Título -->
            <div class="form-group col-md-4">
              <label for="inputEmail4">Título Música</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Título música" value="Arena en Nuestras Manos">
            </div>

            <div class="form-group col-md-4">
              <label for="inputEmail4">Nombre Albúm</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre albúm" value="Transparente">
            </div>

          </div>

            <div class="form-row">
          
            <!-- Spotify -->
            <div class="form-group col-md-4">
              <label for="inputEmail4">Link Spotify</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Título música" value="https://open.spotify.com/intl-es/track/7JWoASkRP6gurWwxYXOKlh">
            </div>

            <!-- Apple -->
            <div class="form-group col-md-4">
              <label for="inputEmail4">Apple Music</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Título música" value="https://music.apple.com/us/song/arena-en-nuestras-manos/900246564">
            </div>

              <!-- Imágen -->
              <div class="form-group col-md-4">
                <label for="inputEmail4">Imágen del albúm</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                  <label class="custom-file-label" for="validatedCustomFile">Selecciona archivo</label>
                </div>
              </div>

          </div>

            <div class="form-row">
              <!-- Descripcion -->
              <div class="form-group col-md-12">
                <label for="inputEmail4">Imágen del albúm</label>
                <textarea class="form-control" placeholder="Ingresa la descripción del albúm aquí...">Transparente es el sexto álbum de estudio de la banda argentina de reggae, Dread Mar-I, que fue lanzado el 1.º de junio del año 2012. El álbum cuenta con 22 temas originales de la banda. Su primer éxito fue Buscar en Jah, el primer tema del disco, cuyo video se conoció tiempo antes de que el álbum llegue a las ventas.</textarea>
              </div>
            </div>

            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Limpiar</button>

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
