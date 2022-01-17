<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <p>Desenvolver um algoritmo que efetue a soma de todos os números ímpares que são múltiplos de
três e que se encontram no conjunto dos números de 1 até 500. </p>
    <?php
    $sum = 0;
    for($i = 1; $i <= 500; $i++){
        if($i % 3 == 0 and $i % 2 == 1){
            $sum += $i;
            echo "<p>o valor da soma é: $i </p>";
        }
       
    }
    
    
    ?>
</body>
</html>