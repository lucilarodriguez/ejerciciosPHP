<?php

if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $nombre_usuario = $_POST['nombre_usuario'];
    $clave = $_POST['clave'];

    require '../vendor/autoload.php';

    $usuario = new lurodriguezalfaro\usuario;
    $resultado = $usuario-> login($nombre_usuario, $clave);

    if ($resultado) {
        session_start();

        $_SESSION['usuario_info']= array(
            'nombre_usuario'=>$resultado['nombre_usuario'],
            'estado'=>1
        );

        header('Location: dashboard.php');
    }else {
        print '<h2>Error al iniciar sesión, revisá los datos ingresados</h2> 
        <br> <a href="index.php">Volver a intentar</a>';
    }

}
?>