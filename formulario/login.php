<?php
$user= $_POST['user'];
$pass= $_POST['pass'];
$bbdd= [
    'user'=> 'admin',
    'pass'=> '1234'
];
if ($bbdd['user'] == $user && $bbdd['pass']== $pass ) {
    print ('Ingreso correcto');
    header('Location: index.html');

}elseif ($bbdd['user'] != $user) {
    print ('Error! Usuario incorrecto');

}elseif ($bbdd['pass']!= $pass) {
    print ('Error! Contraseña incorrecta');
    
}else{
    print ('Error! Revise los datos ingresados');
}


?>