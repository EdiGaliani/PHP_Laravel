<?php

    /*
        Usando como ponto de partida o array de pro$produtosReversed,
        inverte a ordem dos mesmos, acrescenta no final
        'maçã' e 'pêra' e apresenta numa ul.
    */

    $produtosReversed = ['arroz', 'batata', ' laranja'];

    $produtosReversed = array_reverse($produtosReversed);

    array_push($produtosReversed, 'maça', 'pêra' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    
<ul>
        <li> <?= $produtosReversed[0] ?></li>
        <li> <?= $produtosReversed[1] ?></li>
        <li> <?= $produtosReversed[2] ?></li>
        <li> <?= $produtosReversed[3] ?></li>
        <li> <?= $produtosReversed[4] ?></li>    
    </ul>  

</body>
</html>