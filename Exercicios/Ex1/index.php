<!--
Crie um algoritmo que receba um número digitado pelo usuário e verifique 
se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor 
Positivo", "Valor Negativo" ou "Igual a Zero".
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>

<body>
    <form action="" method="get">
        <label for="txtNumero">digite um Número</label>
        <input type="number" name="txtNumero" id="txtNumero">
    </form>

    <?php
    
        if(isset($_GET['txtNumero'])){
            $numero = $_GET['txtNumero'];


            if($numero > 0){
                $mensagem = "Valor Positivo";
            }
            elseif($numero < 0){
                $mensagem = "Valor negativo";
            }
            else{
                $mensagem = "Valor igual a zero";
            }
            
            echo"$mensagem";

        }    
    ?>
</body>

</html>