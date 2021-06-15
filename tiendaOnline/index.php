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
    <link  rel="icon"   href="assets/imagenes/favicon-el-mistol.png" type="image/png"/> 

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
       <div class="row">
        <?php
           require 'vendor/autoload.php';
           $articulo = new lurodriguezalfaro\articulo;
           $info_articulos = $articulo->mostrar();
           $cantidad = count ($info_articulos);
           if ($cantidad >0) {
             for ($i=0; $i <$cantidad; $i++) {
              $item = $info_articulos[$i];
        ?>
        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="text-center"><strong> <?php print $item['titulo'] ?></strong></h4>
            </div>
              <div class="panel-body">
                      <?php
                        $foto = 'upload/'.$item['foto'];
                        if(file_exists($foto)){
                      ?>
                        <img src="<?php print $foto; ?>" class="img-responsive">
                      <?php }else{?>
                        <img src="assets/imagenes/not-found.jpg" class="img-resposive">
                      <?php } ?>
                <h4 class="text-center"><strong>$<?php print $item['precio'] ?></strong></h4>
              </div>
              <div class="panel-footer">
                <a href="carrito.php?id=<?php print $item['id'] ?>" class="btn btn-success btn-block">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Compar
                </a>
              </div>
            </div>
          </div>

        <?php
            }
          }else{
        ?>
        <h4>No hay artículos</h4>
        <?php
            }
        ?>
       </div> 

    </div> <!-- /container -->
    
    <footer class="footer container-fluid bg-primary">
      <div class="col-md-6 text-center">
        <p> <span class="glyphicon glyphicon-copyright-mark"></span> Realizado por: <a href="http://linkedin.com/in/lurodriguezalfaro" target="_blank">Lucila Rodriguez Alfaro</a></p>
      </div>
      <div class="col-md-6 text-center">
        <ul class="list-inline">
          <li><a href="https://www.facebook.com/elmistolmuebleria" target="_blank"><span class="glyphicon glyphicon-thumbs-up"></span> Facebook</a></li>
          <li><a href="https://wa.me/542613620148" target="_blank"><span class="glyphicon glyphicon-comment"></span> WhatsApp</a></li>
          <li><a href="panel/index.php" target="_blank"><span class="glyphicon glyphicon-cog"></span> Panel</a></li>
        </ul>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
