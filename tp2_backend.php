<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>IF</h1>
    <?php
    echo "Inicio del programa <br>";

    $a=10;
    $b=5;

    if ($a>$b) {
        echo "$a es mayor a $b";
    }
    echo "<br> Fin del programa ";

    ?>
    <h2>ELSE</h2>
    <?php
    echo "Inicio del programa <br>";

    $a=10;
    $b=50;

    if ($a>$b) {
        echo "$a es mayor a $b";
    } else {
        echo "$a No es mayor a $b";
    }

    echo "<br> Fin del programa ";

    ?>

<h2>ELSEIF</h2>
    <?php
    echo "Inicio del programa <br>";

    $a=10;
    $b=10;

    if ($a>$b) {
        echo "$a es mayor a $b";
    } elseif ($a == $b) {
        echo "$a es igual a $b";
    } else {
        echo "$a no es mayor a $b";
    }

    echo "<br> Fin del programa ";

    ?>

</body>
</html>