<?php
session_start();

if(!isset($_SESSION['usuario_info']) OR empty($_SESSION['usuario_info']))
  header('Location: ../index.php');

  require '../../vendor/autoload.php';

  if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $articulo = new lurodriguezalfaro\articulo;
    $resultado = $articulo-> mostrarPorId($id);

    if (!$resultado) {
        header('Location: index.php');
    }

  }else {
    header('Location: index.php');
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

    <title>El Mistol Mueblería</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
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
          <a class="navbar-brand" href="../dashboard.php">El Mistol Mueblería</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="../pedidos/index.php" class="btn">Pedidos</a>
            </li> 
            <li class="active">
              <a href="index.php" class="btn">Articulos</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-haspopup="true" aria-expanded="false"><?php print $_SESSION['usuario_info']['nombre_usuario']?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="../cerrar_sesion.php">Salir</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
      <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-8">
                  <fieldset>
                  <legend>Datos para actualizar artículo</legend>
                    <form  method="POST" action="../acciones.php" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?php print $resultado['id'] ?>">
                      <div class="form-group">
                        <label>Titulo</label>
                        <input value="<?php print $resultado['titulo'] ?>" type="text" class="form-control" name="titulo" required>
                      </div>  <!-- /Titulo -->
                      <div class="form-group">
                        <label>Descripción</label>
                        <textarea class="form-control" name="descripcion" cols="30" rows="10" required>
                        <?php print $resultado['descripcion'] ?>
                        </textarea>
                      </div>  <!-- /Descripcion -->
                      <div class="form-group">
                        <label>Categorias</label>
                          <select class="form-control" name="categoria_id" required>
                            <option value="">--Seleccione--</option>
                            <?php
                              require '../../vendor/autoload.php';
                              $categoria = new lurodriguezalfaro\categoria;
                              $info_categoria = $categoria-> mostrar();

                              $cantidad = count ($info_categoria);
                                for ($i=0; $i < $cantidad; $i++) {
                                  $item = $info_categoria[$i];
                            ?>
                                <option value="<?php print $item['id'] ?>"
                                 <?php print $resultado['categoria_id']== $item['id'] ?'selected':'' ?>
                                ><?php print $item['nombre'] ?></option>
                            <?php
                                }
                            ?>
                          </select>
                      </div>  <!-- /Categoria -->
                      <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto">
                        <input type="hidden" name="foto_temp" value="<?php print $resultado['foto'] ?>">
                      </div>  <!-- /Foto -->
                      <div class="form-group">
                        <label>Precio</label>
                        <input value="<?php print $resultado['precio'] ?>" type="text" class="form-control" name="precio" required>
                      </div> <!-- /Precio -->

                      <div  class="form-group">
                      <input type="submit" name="accion" class="btn btn-primary" value="Actualizar">
                          
                      <a href="index.php" class="btn btn-danger">Cancelar</a>
                      </div>   <!-- /Button -->
                      
                    </form>  <!-- /form-->
                  </fieldset>
                </div>  <!-- /col-md-8"-->
              </div>  <!-- /row -->
            
            </div>  <!-- /col-md-12 -->
      </div>     <!-- /row -->

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
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

  </body>
</html>
