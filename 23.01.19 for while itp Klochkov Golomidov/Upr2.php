<!DOCTYPE html>
<html lang="ru">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- <form name="form" method="post">
        <input type="text" name="n">
        <input type="text" name="m"><br>
        <input type="submit" value="YES">
    </form> -->

    <?php
    $i =1;
    while($i<=10){
        echo $i++;
        if ($i==5)
        break;
    }
    echo "<br>";
    $i = 0;
    while($i <9){
        $i++;
        if($i==5)
        continue;
        echo $i;
    }
    echo "<br>";
    $i = 1; $j=1;
    while($j<=10){
        while($i<=10){
            echo $i++;
            if($i ==5)
            break 2;
        }
        $j++;
    }
        
    ?>
    
</body>
</html>