<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <style>
        .tables{
            display: inline-block;
            border: solid 1px;
            margin: 10px;
            padding: 0px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    
        <?php
            for($j = 0; $j <= 10; $j++){
                echo "<div class='tables'>";
                for($i = 0; $i <= 10; $i++){
                    $multiplication = $j * $i;
                    echo "
                        <p>$j x $i = <b>$multiplication</b></p>
                    ";
                }
                echo "</div>";
            }

            
        ?>
    </table>
</body>
</html>