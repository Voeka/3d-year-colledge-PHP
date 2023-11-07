<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    Введите значение(1-7) <input type="text" name="n"><br>
    <input type="submit">
    
</form>

<?php
$i =$_POST['n'];
switch($i)
{
case 1:
        echo'Понедельник'; break;
case 2:
        echo('Вторник') ; break;
case 3:
        echo('Среда') ; break;
case 4:
        echo('Четверг') ;break;
case 5:
        echo('Пятница') ;break;
 case 6:
        echo('Суббота') ;break;
 case 7:
        echo('Воскресенье') ; break;
 default:
        echo('Ват из из из дай?');
}
?>
    
</body>
</html>