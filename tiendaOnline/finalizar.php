<?php
   session_start();
   require 'funciones.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>El Mistiol Mueblería</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">El Mistol Mueblería</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="carrito.php" class="btn">
              <span class="glyphicon glyphicon glyphicon-shopping-cart"></span> Carrito
              <span class="badge"><?php print cantidadArticulos(); ?></span></a>
            </li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
        <div class="main-form">
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                        <legend>Completa tus datos</legend>
                            <form action="completar_pedido.php" method="post" target="_blank">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="nombre" required>
                                </div>  <!-- /Nombre -->
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" name="apellidos" required>
                                </div>  <!-- /Apellidos -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="tu@email.com" required>
                                </div>  <!-- /Email -->
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="number" class="form-control" name="telefono" placeholder="Solo números, sin espacios ni guiones" required>
                                </div>  <!-- /Celular -->
                                <div class="form-group">
                                    <label>Comentario</label>
                                    <textarea name="comentario" class="form-control" rows="4" placeholder="Podés agregar aca algún comentario adicional sobre tu pedido"></textarea>
                                </div>  <!-- /Comentario -->
                                <input type="hidden" name="n_wa" value="542613620148">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Enviar pedido por WhatsApp</button>
                                
                            </form>
                    </fieldset>
                </div>
            </div>
        </div>

    </div> <!-- /container -->
    <footer class="footer container-fluid bg-primary">
      <div class="col-md-6">
        <p> <span class="glyphicon glyphicon-copyright-mark"></span> Realizado por: <a href="http://linkedin.com/in/lurodriguezalfaro" target="_blank">Lucila Rodriguez Alfaro</a></p>
      </div>
      <div class="col-md-6">
        <div class="row">
        <ul class="list-inline text-right">
          <li><a href="https://www.facebook.com/elmistolmuebleria" target="_blank"><span class="glyphicon glyphicon-thumbs-up"></span> Facebook</a></li>
          <li><a href="https://www.instragram.com/elmistolmuebleria" target="_blank"><span class="glyphicon glyphicon-heart-empty"></span> Instagram</a></li>
          <li><a href="https://wa.me/542613620148" target="_blank"><span class="glyphicon glyphicon-comment"></span> WhatsApp</a></li>
        </ul>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
