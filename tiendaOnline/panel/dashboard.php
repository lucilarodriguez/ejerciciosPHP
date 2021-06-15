<?php
session_start();

if(!isset($_SESSION['usuario_info']) OR empty($_SESSION['usuario_info']))
  header('Location: index.php');


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

    <title>El Mistol Mueblería</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
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
              <a href="pedidos/index.php" class="btn">Pedidos</a>
            </li> 
            <li>
              <a href="articulos/index.php" class="btn">Articulos</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-haspopup="true" aria-expanded="false"><?php print $_SESSION['usuario_info']['nombre_usuario']?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="cerrar_sesion.php">Salir</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
    <div class="row">
          <div class="col-md-12">
            <fieldset>
            <legend>Últimos 10 pedidos</legend>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>N° Pedido</th>
                    <th>Total</th>
                    <th>Fecha</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    require '../vendor/autoload.php';
                    $pedido = new lurodriguezalfaro\pedido;
                    $info_pedido = $pedido-> mostrarUltimos();


                    $cantidad = count($info_pedido);
                    if ($cantidad > 0) {
                        $c=0;
                      for ($i=0; $i < $cantidad ; $i++) { 
                        $c++;
                        $item = $info_pedido[$i];

                  ?>

                  <tr>
                    <td><?php print $c ?></td>
                    <td><?php print $item['nombre'].' '.$item['apellidos']?></td>
                    <td><?php print $item['id']?></td>
                    <td><?php print $item['total']?>$</td>
                    <td><?php print $item['fecha']?></td>
                    <td class="text-center">
                        <a href="pedidos/ver.php?id=<?php print $item['id'] ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
                    </td>
                  </tr>

                    <?php
                      }
                    }else {

                    ?>
                    <tr>
                      <td colspan="6">No hay registros</td>
                    </tr>

                    <?php  } ?>

                </tbody>
              </table>
            </fieldset>
          </div>
    </div>  

    </div> <!-- /container -->
    <footer class="footer container-fluid bg-primary text-center">
      <div class="col-md-6">
        <p> <span class="glyphicon glyphicon-copyright-mark"></span> Realizado por: <a href="http://linkedin.com/in/lurodriguezalfaro" target="_blank">Lucila Rodriguez Alfaro</a></p>
      </div>
      <div class="col-md-6 text-center">
        <ul class="list-inline">
        <li><a href="../index.php" target="_blank"><span class="glyphicon glyphicon-home"></span> Tienda</a></li>
          <li><a href="https://wa.me/542613620148" target="_blank"><span class="glyphicon glyphicon-comment"></span> WhatsApp</a></li>
        </ul>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

  </body>
</html>
