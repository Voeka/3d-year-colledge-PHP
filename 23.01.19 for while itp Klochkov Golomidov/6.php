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
    $n = 10;
    
    for ($i =1;$i<=$n;$i++){
        if($i%2==0)
        continue;
        echo "$i<br/>";
    }
        
    ?>
    
</body>
</html>