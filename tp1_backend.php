<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //1. Imprima por pantalla: “Hola mundo”.
    echo '¡Hola Mundo, soy Lucila Rodríguez Alfaro!';
    echo '<br>';
    //2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
    $saludo="¡Este es mi primer ejercicio en PHP!";
    echo "$saludo";
    echo '<br>';
    //Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera.
    $n1 = 10;
    $n2 = 5;

    $suma = $n1 + $n2;
    echo '<br>';
    echo 'La suma entre 10 y 5 es ' . $suma;
    echo '<br>';
    $resta = $n1 - $n2;
    echo 'La resta entre 10 y 5 es ' . $resta;
    echo '<br>';
    $mult = $n1 * $n2;
    echo 'La multiplicación entre 10 y 5 es ' . $mult;
    echo '<br>';
    $div = $n1 / $n2;
    echo 'El resto de la división entre 10 y 5 es ' . $div;
    echo '<br>';

    //Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.
    $c= 20;
    $f= ($c*1.8)+32;
    echo '<br>';
    echo '20°C es igual a ' . $f .'°F';
    echo '<br>';

    //5. Implementar algoritmos que permitan:
    //a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
    $a=12;
    $b=18;
    $per= $a*2+$b*2;
    $area= $b*$a;
    echo '<br>';
    echo 'El perimetro del rectángulo, dado que su base es 18cm y su altura 12cm, es ' . $per.'cm' . ' y el area del mismo es ' . $area.'cm.';
    echo '<br>';
    //b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.
    $r=30;
    $pCir=(2*3.12)*$r;
    $aCir=3.12*($r*$r);
    echo '<br>';
    echo 'El perímetro del círculo, dado que su radio es de 30cm, es es igual a ' . $pCir.'cm' . ' y el area del mismo es ' . $aCir.'cm.';
    echo '<br>';



    ?>
</body>
</html>