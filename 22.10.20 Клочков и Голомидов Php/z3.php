<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name = "form" method="POST">
            Введите m <input type="text" name="m"><br><br>
            Введите n <input type="text" name="n"><br><br>

            
            <input type="submit">
    </form>
<?php
    $m=$_POST["m"];
    $n=$_POST["n"];

    $z1=0;
    $z2=0;
    $z1=((($m-1)*($m**1/2)-($n-1)*($n**1/2))/(((($m**3)*$n)**1/2)+($n*$m)+($m**2)-$m));
    $z2=((($m**1/2)-($n**2))/$m);
    echo "$z1<br/>";
    echo "$z2<br/>";
    ?>
</body>
</html>