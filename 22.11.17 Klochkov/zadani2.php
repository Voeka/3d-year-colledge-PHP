<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" name="form">
<label> введите номер действия: <br>
    1 — сложение двух чисел; <br>
    2 — разность двух чисел; <br>
    3 — произведение двух чисел; <br>
    4 – частное двух чисел;<br>
<input type="text" name="n"></label><br><br>
<label for="">A = <input type="text" name='a'></label><br><br>
<label for="">B = <input type="text" name="b"></label><br><br>
<input type="submit">
</form>


<?php
$i =$_POST['n'];
$a = $_POST['a'];
$b = $_POST['b'];

switch($i){
     case 1:
        echo ($a+$b);break;
    case 2:
        echo ($a-$b);break;
    case 3:
        echo ($a*$b);break;
    case 4:
        echo ($a/$b);break;
    default:
        echo ('Не выбран номер действия');break;
}

?>
    
</body>
</html>