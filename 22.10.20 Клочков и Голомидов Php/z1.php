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
            Введите Q <input type="text" name="n">
            <input type="submit">
    </form>
<?php
    $a=$_POST["n"];
    $f=0;
    $f=$a%3;
    echo "$f<br/>";
    ?>
</body>
</html>