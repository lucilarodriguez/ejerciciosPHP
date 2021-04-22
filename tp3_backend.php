<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Mostrar los números del 1 al 100.</h3>
    <?php
    $i=1;
    echo "<p>Inicio del programa</p>";
    while ($i <= 100) {
        echo "$i,";
        $i++;
    }
    echo "<p>Fin del programa</p>";
    ?>

<h3>Mostrar los números del 100 al 1.</h3>
    <?php
    $i=100;
    echo "<p>Inicio del programa</p>";
    while ($i >=0) {
        echo "$i,";
        $i--;
    }
    echo "<p>Fin del programa</p>";
    ?>
<h3>Mostrar los números pares del 1 al 100.</h3>
    <?php
    
    for($n=2; $n<=100; $n= $n+2){
    
        echo "$n,";
    }
    ?>
<h3>Mostrar la suma de los números de 1 a 20.</h3>
    <?php
    $suma=0;
    echo "<p>Inicio del programa</p>";
    for($n=1; $suma<19;){
        $suma = $suma + $n;
        echo "$suma + $n = ". $suma+$n . "</br>";
    }
    echo "<p>Fin del programa</p>";
    ?>
<h3>Mostrar la suma de números pares de 1 a 20.</h3>
<?php
    $suma=0;
    echo "<p>Inicio del programa</p>";
    for($n=2; $suma<=10; $n= $n+2){
        $suma = $suma + $n;
        echo "$suma + $n = ". $suma+$n . "</br>";
    }
    echo "<p>Fin del programa</p>";
    ?>

</body>
</html>