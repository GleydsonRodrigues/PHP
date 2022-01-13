<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <p>Faça um programa que calcula e escreve a seguinte soma:</br>
        soma = 1/1 + 3/2 + 5/3 + 7/4 + ... + 99/50</p>

    <?php
        $valor = 1;
        $soma = 0;
        for($i = 1; $i <= 50; $i++){
            
            echo "$valor / $i + ";
            $soma += $valor/$i;
            $valor += 2;
        }
        echo "<br> o valor da soma é: $soma";

    
    ?>
</body>
</html>