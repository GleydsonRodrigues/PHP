<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .caixa-de-texto{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div>
        <p>Escreva um programa que lê 15 valores reais, encontra o maior e o menor deles e
mostra o resultado.</p>
    </div>

    <form action='' method='get'>
    <?php

       
    for($i = 1; $i <= 15; $i++){

        echo "<div class='caixa-de-texto'>
                    <label for='txtNumero$i'>Insira o número $i</label>
                    <input type='text' name='txtNumero$i' id=''>
            </div>";
        }

        if(isset($_GET['txtNumero1'])){
            for($i = 1; $i <= 15; $i++){
                $valor = $_GET["txtNumero$i"];
    
                $valores[$i] = $valor;
            }
            $maiorValor  = max($valores);
            $menorValor = min($valores);
            echo "O maior valor é $maiorValor";
            echo "<br> O menor valor é $menorValor";
        }


        
    
    ?>
    <button type="submit">Enviar</button>
     </form>
</body>
</html>