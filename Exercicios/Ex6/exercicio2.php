<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php
            for($j = 0; $j <= 10; $j++){
                echo "<tr>";
                for($i = 0; $i <= 10; $i++){
                    $multiplication = $j * $i;
                    echo "
                        <td>$i x $j = $multiplication</td>
                    ";
                }
                echo "</tr>";
            }

            
        ?>
    </table>
</body>
</html>