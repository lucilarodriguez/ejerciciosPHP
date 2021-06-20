
<?php

session_start();
 


if($_SERVER['REQUEST_METHOD'] ==='POST'){

    require 'funciones.php';
    require 'vendor/autoload.php';

    if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
        $cliente = new lurodriguezalfaro\cliente;

        $_params = array(
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono'],
            'comentario' => $_POST['comentario'],
        );
    
        $cliente_id = $cliente->registrar($_params);
    
        $pedido = new lurodriguezalfaro\pedido;
    
        $_params = array(
            'cliente_id' => $cliente_id,
            'total' => calcularTotal(),
            'fecha' => date('Y-m-d')
        );
    
        $pedido_id = $pedido->registrar($_params);
       
        foreach ($_SESSION['carrito'] as $key => $value) {
            $_params = array(
                "pedidos_id" => $pedido_id,
                "articulos_id" => $value['id'],
                "precio" => $value['precio'],
                "cantidad" => $value['cantidad']
            );

            $pedido->registrarDetalle($_params);
           
        $_SESSION['carrito'] = array();

        }

    }

    
  
        
        // //$str = implode(',',$_params);
        $ttl = $value['cantidad']*$value['precio'];

         if (isset($_POST['submit'])) {

            $nombre = $_POST['nombre'];
             $apellidos = $_POST['apellidos'];
             $n_wa = $_POST['n_wa'];
             $carrito = $pedido_id;
             $total= $ttl;
             //$p = $str;

             //header("location:https://api.whatsapp.com/send?phone=$n_wa&text=Hola%20soy%20$nombre%20$apellidos.%20%0DHice%20el%20pedido%20número%20$carrito%20por:%20$$total");
            echo "<script> location.href ='https://api.whatsapp.com/send?phone=$n_wa&text=Hola%20soy%20$nombre%20$apellidos.%20%0DHice%20el%20pedido%20número%20$carrito%20por:%20$$total'; </script>";

            // header( 'Location:gracias.php');
            // echo "<script>  location.href = 'gracias.php'; </script>";

            // echo "<script>window.open('https://api.whatsapp.com', '_blank'); </script>";
            
         }else {

            
            echo "
                <script>
                    window.location=history.go(-1);
                </script>
            ";
         }


}

?>