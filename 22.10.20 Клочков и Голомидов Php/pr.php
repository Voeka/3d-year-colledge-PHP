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
            Введите а <input type="text" name="n">
            <br><br>
            Введите b <input type="text" name="m">
            <br><br>
            Введите x <input type="text" name="mm">
            <br><br>
            <input type="submit">
    </form>
<?php
    $a=$_POST["n"];
    $b=$_POST["m"];
    $x=$_POST["mm"];
    $f=0;
    $f= 10 ** 4*$a-3.20*$b+log($x,5);
    echo "$f<br/>";
    ?>
</body>
</html>