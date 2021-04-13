<!DOCTYPE html>
<html lang="en">
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
    $l[0]->apresentar();
    $l[1]->apresentar();
    ?>
</body>
</html>