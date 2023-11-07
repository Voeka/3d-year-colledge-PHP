<!DOCTYPE html>
<html lang="ru">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form method="post">
        <input type="text">
        <input type="text">
        <input type="submit" value="YES">
    </form>

    <?php
        $n = 10;
        for ($i = 1; $i <= $n; $i++){
            echo "$i<br/>";
        }

        for ($i = 1; $i <= $n; print $i++)
        
    ?>
    
</body>
</html>