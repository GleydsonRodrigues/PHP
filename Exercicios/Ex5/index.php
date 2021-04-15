<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "Lutador.php";
    $l = array();
    $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 69.9, 11 , 2 , 1);
    $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80, 12, 2, 1);
    $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 82.6, 13, 0, 2);
    $l[4] = new Lutador("Ufacobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $l[5] = new Lutador("Nerdeard", "EUA", 31, 1.83, 105.7, 12, 2, 2,);
    $l[0]->apresentar();
    $l[1]->apresentar();
    $l[2]->apresentar();
    ?>
</body>
</html>