<!DOCTYPE html>
<html lang="ru">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<form method="post">
    <input type="text" name="a"><br>
    <input type="submit" value="Yes">
</form>

 <?php
    $a = $_POST['a'];
    $sum = 0;

    for($i=1;$i<= strlen($a);$i++){
        $sum+=$a[$i];
        
        
    }
    echo $sum;
    
    
   
    
        
    ?>
    
</body>
</html>