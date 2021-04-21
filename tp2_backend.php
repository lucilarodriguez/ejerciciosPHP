<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Validar que sea un número positivo</h1>
    <?php
    echo "Inicio del programa <br>";

    $n=10;

    if ($n>0) {
        echo "$n es un numero positivo";
    }
    echo "<br> Fin del programa ";

    ?>
    <h2>Validar que sea un número mayor a 1 y menor a 10</h2>
    <?php
    echo "Inicio del programa <br>";

    $n=5;

    if ($n> 1 && $n<10) {
        echo "$n es mayor a a 1 y menor a 10";
    } else {
        echo "$n No es mayor a a 1 y menor a 10";
    }

    echo "<br> Fin del programa ";

    ?>

<h2>Validar que sea un número mayor a 10 o menor a 2</h2>
    <?php
    echo "Inicio del programa <br>";

    $n=5;

    if ($n> 10 || $n<2) {
        echo "$n es mayor a a 10 y menor a 2";
    } else {
        echo "$n No es mayor a a 1 y menor a 10";
    }

    echo "<br> Fin del programa ";

    ?>

<h2>Validar dos variables + operaciones</h2>
    <?php
    echo "Inicio del programa <br>";

    $n1=10;
    $n2=1;

    if ($n1>$n2) {
        echo "$n1 + $n2 = " . $n1 + $n2 . " <br>";
        echo "$n1 - $n2 = " . $n1 - $n2 . " <br>";

    } elseif ($n1 < $n2) {
        echo "$n1 * $n2 = " . $n1 * $n2 . " <br>";
        echo "$n1 / $n2 = " . $n1 / $n2 . " <br>";
    } else {
        echo "Los números ingresados son iguales";
    }

    echo "<br> Fin del programa ";

    ?>

</body>
</html>