<!DOCTYPE html>
<html lang="ru">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
 <?php
    $a =9;
    
    for($i=1;$i<=$a;$i++){
        for($j=1;$j<=$i;$j++){
            echo "$i";
        }
        echo '<br>';
    }
        
    ?>
    
</body>
</html>