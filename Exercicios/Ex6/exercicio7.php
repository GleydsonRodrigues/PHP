<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <p>Escrever um algoritmo que gera e escreve os números ímpares entre 100 e 200. </p>
    <?php
    for($i = 100; $i <= 200; $i++){
        if($i % 2 == 1){
            echo "<p> o valor $i é impar </p>";
        }
    }
    ?>
</body>
</html>