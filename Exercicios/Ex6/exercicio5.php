<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <p></p>
    
    <form action="" method="get">
        <input type='text' name='txtValor'>
        <input type='submit' value='Enviar'>
    </form>
    <?php

            $total = 0;
            
            // do{
            //     $i = 0;
            //     echo "
                
            // 
            //     "; 
            //     break;

            //    
            //     $i++;

            // }
                    
            // while ($valor != 0); 

            if(isset($_GET['txtValor'])){
                $valor = $_GET['txtValor']; 
                if($valor != 0){
                    unset($_GET['txtValor']);
                    
                }else{
                    
                    echo "sair, valor total: $total";
                    unset($_GET['txtValor']);
                }
            }
            
            
        
         
       
    
    ?>
    
</body>
</html>