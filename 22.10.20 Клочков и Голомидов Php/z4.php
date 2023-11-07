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
            Введите a <input type="text" name="a"><br><br>
            Введите b <input type="text" name="b"><br><br>
            Введите c <input type="text" name="c"><br><br>
            Введите d <input type="text" name="d"><br><br>

            
            <input type="submit">
    </form>
<?php
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
    $d=$_POST["d"];

    $x=0;
    $z=0;
    $y=0;

    $x=(abs($a+($c**3)))**1/2;
    $z=(($d**3)+$b)**1/2;

    $y=((abs(tan($z**2))+log($x))**1/5)/(atan($x)+cos($z)**2);

    echo "$y<br/>";
    ?>
</body>
</html>