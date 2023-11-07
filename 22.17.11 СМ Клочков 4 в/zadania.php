<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Задание 1</h1>
<form method='POST' name="form1">
    <label for="">Номер месяца(1-12) <input type="text" name="a"></label><br>
    <input type="submit">
</form>
<hr>
<h1>Задание 2</h1>
<form method="POST" name="form2">
    <label for="">введите номер действия: <br>
1 — сложение двух чисел;<br>
2 — разность двух чисел; <br>
3 —произведение двух чисел;<br>
4 – частное двух чисел;<br>
<input type="text" name="b"><br>
</label>
<label for="">A = <input type="text" name="z1"></label><br>
<label for="">B = <input type="text" name="z2"></label><br>
<input type="submit">
</form>
<hr>
<h1>Задание 3</h1>
<form action="" method="post" name='form3'>
<label for="">Ваш возраст - 20-69 <input type="text" name='age'></label><br>
<input type="submit"><br>
</form>
<hr>
<h1>Задание 5</h1>
<form action="" method="POST" name='form5'>
    <label for="">X = <input type="text" name='x'></label><br>
    <label for="">Y = <input type="text" name="y"></label><br>
    <input type="submit">
</form>

<?php
$suz = $_POST['a'];
switch($suz){
    case 1: 
        echo 'Зима'; break;
    case 2: 
        echo 'Зима'; break;
    case 3: 
        echo 'Весна'; break;
    case 4: 
        echo 'Весна'; break;
    case 5: 
        echo 'Весна'; break;
    case 6: 
        echo 'Лето'; break;
    case 7:
         echo 'Лето'; break;
    case 8:
         echo 'Лето'; break;
    case 9:
         echo 'Осень'; break;
    case 10:
         echo 'Осень'; break;
    case 11:
         echo 'Осень'; break;
    case 12:
         echo 'Зима'; break;
    default:
        echo 'Неизвестный сезон<br>';
}

$b = $_POST['b'];
$z1 = $_POST['z1'];
$z2 = $_POST['z2'];

switch($b2){
    case 1:
        echo $z1+$z2+'<br>'; break;
    case 2:
        echo $z1 - $z2+'<br>'; break;
    case 3:
        echo $z1 * $z2+'<br>'; break;
    case 4:
        echo $z1/ $z2+'<br>'; break;
    default:
        echo'Выберите 1-4<br>';
}

$age = $_POST['age'];

switch($age){
    case 20: echo 'Двадцать лет'; break;
    case 21: echo 'Двадцать один лет'; break;
    case 22: echo 'Двадцать два лет'; break;
    case 23: echo 'Двадцать три лет'; break;
    case 24: echo 'Двадцать четыре лет'; break;
    case 25: echo 'Двадцать пять лет'; break;
    case 26: echo 'Двадцать шесть лет'; break;
    case 27: echo 'Двадцать семь лет'; break;
    case 28: echo 'Двадцать восемь лет'; break;
    case 29: echo 'Двадцать девять лет'; break;
    case 30: echo 'Тридцать лет'; break;
    case 31: echo 'Тридцать один лет'; break;
    case 32: echo 'Тридцать два лет'; break;
    case 33: echo 'Тридцать три лет'; break;
    case 34: echo 'Тридцать четыре лет'; break;
    case 35: echo 'Тридцать  пять лет'; break;
    case 36: echo 'Тридцать шесть лет'; break;
    case 37: echo 'Тридцать семь лет'; break;
    case 38: echo 'Тридцать восемь лет'; break;
    case 39: echo 'Тридцать девять лет'; break;
    case 40: echo 'Сорок лет'; break;
    case 41: echo 'Сорок один лет'; break;
    case 42: echo 'Сорок два лет'; break;
    case 43: echo 'Сорок три лет'; break;
    case 44: echo 'Сорок четыре лет'; break;
    case 45: echo 'Сорок пять лет'; break;
    case 46: echo 'Сорок шесть лет'; break;
    case 47: echo 'Сорок семь лет'; break;
    case 48: echo 'Сорок восемь лет'; break;
    case 49: echo 'Сорок девять лет'; break;
    case 50: echo 'Пятьдесят лет'; break;
    case 51: echo 'Пятьдесят один лет'; break;
    case 52: echo 'Пятьдесят два лет'; break;
    case 53: echo 'Пятьдесят три лет'; break;
    case 54: echo 'Пятьдесят четыре лет'; break;
    case 55: echo 'Пятьдесят пять лет'; break;
    case 56: echo 'Пятьдесят шесть лет'; break;
    case 57: echo 'Пятьдесят семь лет'; break;
    case 58: echo 'Пятьдесят восемь лет'; break;
    case 59: echo 'Пятьдесят девять лет'; break;
    case 60: echo 'Шестьдесят лет'; break;
    case 61: echo 'Шестьдесят один лет'; break;
    case 62: echo 'Шестьдесят два лет'; break;
    case 63: echo 'Шестьдесят три лет'; break;
    case 64: echo 'Шестьдесят четыре лет'; break;
    case 65: echo 'Шестьдесят пять лет'; break;
    case 66: echo 'Шестьдесят шесть лет'; break;
    case 67: echo 'Шестьдесят семь лет'; break;
    case 68: echo 'Шестьдесят восемь лет'; break;
    case 69: echo 'Шестьдесят девять лет'; break;
    default: echo 'Не в диапозоне 20-69';    
}

$x = $_POST['x'];
$y = $_POST['y'];

if($x>$y){
    $x=$x**2;
    $y=$y**1/2;
} elseif($y>$x){
    $y=$y**2;
    $x=$x**1/2;
} else echo 'error';

echo '<br>X = ';
echo $x;
echo '<br>Y = ';
echo $y;

?>
    
</body>
</html>