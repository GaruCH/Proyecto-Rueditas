<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Artista</title>

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
        <a class="py-2 d-none d-md-inline-block" href="artista_registrar.php">Artistas</a>
        <a class="py-2 d-none d-md-inline-block" href="album-registrar.php">Album</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Buscar</a>
      </div>
    </nav>
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
	<div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="background-color: rgba(0, 0, 0, 0.75);">
		<h2>Registra a tu artista</h2>
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
  
              <div class="form-group col-md-6">
                  <label for="inputEmail4">Apodo</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Apodo">
              </div>

              <div class="form-group col-md-6">
                  <label for="inputEmail4">Nacionalidad</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Apellido Materno">
              </div>
              
            </div>

          <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Biografía del artista</label>
                <textarea class="form-control" placeholder="Ingresa la biografía del artista aquí..."></textarea>
              </div>
          </div>
            
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Imágen del albúm</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Selecciona tu imagen</label>
             </div>
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

</body>
</html>