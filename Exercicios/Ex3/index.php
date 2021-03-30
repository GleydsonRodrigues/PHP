<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <Pre>

<?php
    include_once"metodos.php";

    $p1 = new ContaBanco();
    $p2 = new ContaBanco();

    $p1->abrirConta("CC");
    $p1->setDono("Jubileu");
    $p2->abrirConta("CP");
    $p2->setDono("Creuza");
    $p2->deposito(1000);
    $p2->sacar(1000);
    $p1->pagarMensal();


    print_r($p1);
    print_r($p2);


?>    </Pre>
</body>
</html>

