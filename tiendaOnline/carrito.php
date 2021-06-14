<?php
//Activar sesiones en PHP
session_start();
require 'funciones.php';


if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    require 'vendor/autoload.php';

    $articulo = new lurodriguezalfaro\articulo;
    $resultado = $articulo-> mostrarPorId($id);

    if (!$resultado)
        header('Location:index.php');
        agregarArticulo($resultado, $id);

    if (isset($_SESSION['carrito'])){ //Existe carrito
         //Existe el articulo en el carrito
        if(array_key_exists($id,$_SESSION['carrito'])){
            actualizarArticulo($id);

        }else { 
            //No existe el artículo en el carrito
            agregarArticulo($resultado, $id);
        }

    }else {
         //No existe carrito
        agregarArticulo($resultado, $id);
    }

}

  
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
      <table class="table  table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Artículo</th>
            <th>Foto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
              $c=0;
                foreach($_SESSION['carrito'] as $indice => $value){
                  $c++;
                  $total = $value['precio'] * $value['cantidad'];
          ?>

            <tr>
              <form action="actualizar_carrito.php" method="post">
              <td><?php print $c ?></td>
                <td><?php print $value['titulo'] ?></td>
                <td>
                  <?php
                    $foto = 'upload/'.$value['foto'];
                    if(file_exists($foto)){
                  ?>
                    <img src="<?php print $foto; ?>" width="35">
                  <?php }else{?>
                    <img src="assets/imagenes/not-found.jpg" width="35">
                  <?php } ?>
                </td>
                <td><?php print $value['precio'] ?></td>
                <td>
                  <input type="hidden" name="id" value="<?php print $value['id'] ?>">

                  <input type="text" name="cantidad" class="form-control u-size-100"
                  value="<?php print $value['cantidad'] ?>">
                </td>
                <td>$<?php print $total ?></td>
                <td>
                  <button type="submit" class="btn btn-success btn-xs">
                    <span class="glyphicon glyphicon-refresh"></span>
                  </button>

                  <a href="eliminar_carrito.php?id=<?php print $value['id'] ?>" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-trash"></span>
                  </a>
                </td>
              </form>
            </tr>

          <?php
            }
            }else {
              # code...
           
          ?>
            <tr>
            <td colspan="7">No hay productos en el carrito</td>
            </tr>
          <?php
            }
          ?>
        </tbody>
        <tfoot>
            <tr>
              <td colspan="5" class="text-right"><strong>Total</strong></td>
              <td><strong>$<?php print calcularTotal()?></strong></td>
              <td></td>
            </tr>
        </tfoot>
      </table>  
      
      <?php
         if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
         
      ?>
        <div class="row">
          <div class="col-md-12">
            <div class="pull-left">
              <a href="index.php" class="btn btn-primary">Seguir comprando</a>
            </div>
            <div class="pull-right">
            <a href="finalizar.php" class="btn btn-success">Finalizar la compra</a>
            </div>
          </div>
        </div>
      <?php
        } 
      ?>
    </div> <!-- /container -->
    <footer class="footer container-fluid bg-primary navbar-fixed-bottom">
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
