<?php

    /* 
    1. Constrói um array com todos os resultados da tabuáda dos 327.
    2. Apresenta os dados do array com um ciclo foreach (apenas os valores)
    */

    $valor = 1;
    while($valor <= 10) {
        echo '327 x' . $valor . ' = '
        . $valor * 327 . '<br>';
        $valor++;
    }
    
    
    $resultados = [327, 654, 981, 1308, 1635, 1962, 2289, 2616, 2943, 3270];
    $valor = 1;
    foreach($resultados as $resultado) {
        echo 'Resultado '. $valor++ . ' = ' . $resultado . '<br>';
    }
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    

</body>
</html>