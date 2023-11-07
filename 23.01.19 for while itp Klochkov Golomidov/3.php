<!DOCTYPE html>
<html lang="ru">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form name="form" method="post">
        <input type="text" name="n">
        <input type="text" name="m"><br>
        <input type="submit" value="YES">
    </form>

    <?php
        $n = $_POST['n'];
        $m =$_POST['m'];
        if ($n>$m){
            echo 'Ошибка выполнения';
        }
        else{
            while($n<=$m){
                echo "$n <br/>";
                $n++;
            }



        }
        
    ?>
    
</body>
</html>