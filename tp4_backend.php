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
    $matriz = ["banana" => 56, 
           "manzana" => 45, 
           "pera" => 90];

    $precio="80"; //supuestamente este dato lo ingresa el cliente

    foreach ($matriz as $indice => $valor) {
    
        if ($valor<$precio) {
        echo "$indice \n";
        }
    
    }

    print "\nFinal\n";
    ?>

</body>
</html>