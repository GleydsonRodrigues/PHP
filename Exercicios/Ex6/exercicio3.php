<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="get">
            <label for="txtValor">Valor</label>
            <input type="text" name="txtValor" id="">
            <input type="submit" value="Enviar">   
        </form>
    </div>
    <table border="1">
    <?php
    
    if(isset($_GET['txtValor'])){
        $valor = $_GET['txtValor'];

        for($i = 1; $i <= 200;){
           echo "<tr>";
            for($j = 0; $j < 10; $j++){
                $valorFinal = $i * $valor;
                echo "<td> $i = $valorFinal </td>";
                $i++;
            }
            echo "</tr>";
        }
    }
    
    ?>
    </table>
</body>
</html>