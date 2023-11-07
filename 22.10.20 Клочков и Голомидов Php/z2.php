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
            Введите a1 <input type="text" name="aa"><br><br>
            Введите a2 <input type="text" name="a"><br><br>
            Введите x <input type="text" name="x"><br><br>
            Введите y <input type="text" name="y"><br><br>
            
            <input type="submit">
    </form>
<?php
    $aa=$_POST["aa"];
    $a=$_POST["a"];
    $x=$_POST["x"];
    $y=$_POST["y"];
    $f=1;
    $f=(($x+$y)/$aa)+($a/($x-$y))+($x**1/3);
    echo "$f<br/>";
    ?>
</body>
</html>