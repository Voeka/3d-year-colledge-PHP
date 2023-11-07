<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клочков 3ИС-16 2 лабаратоная 1В</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <img src="image/ЛОГО.png" alt="Logo">
    <H1>Математика В1</H1>
</header>
<main>
    <p></p>
<form method="post">
<p>Введите значение X нач:<input type="text" name="xn"></p><br>
<p>Введите значение X кон:<input type="text" name="xk"></p><br><br>
<p>Метод решения (1-for,2-while,3- do while) <input type="text" name='M'></p><br>
<input type="submit" value="Выполнить">
</form><br>
<hr>
<?php
$xn = $_POST['xn'];
$xk = $_POST['xk'];
$M = $_POST['M'];
if($M==1){
for($i=$xn;$i<=$xk;$i++){
if($i<=10){
    $f=10*$i-5;
    echo '1 ---  ';
}else if($i>10 and $i<20){
    $f=($i+3)*$i**2;
    echo '2 ---  ';
}else if($i>=20){
    $f=(3/($i-25))+2;
    echo '3 ---  ';
}
echo $f;
echo'<br>';
}
echo'<br>Method for';
}else if($M==2){
    while($xn<=$xk){
        if($xn<=10){
            $f=10*$xn-5;
            echo '1 ---  ';
        }else if($xn>10 and $xn<20){
            $f=($xn+3)*$xn**2;
            echo '2 ---  ';
        }else if($xn>=20){
            $f=(3/($xn-25))+2;
            echo '3 ---  ';
        }
        $xn++;
        echo $f;
        echo'<br>'; 
    }
    echo'<br>Method while';
}else if($M==3){
    do{
        if($xn<=10){
            $f=10*$xn-5;
            echo '1 ---  ';
        }else if($xn>10 and $xn<20){
            $f=($xn+3)*$xn**2;
            echo '2 ---  ';
        }else if($xn>=20){
            $f=(3/($xn-25))+2;
            echo '3 ---  ';
        }
        $xn++;
        echo $f;
        echo'<br>'; 
    }
    while($xn<=$xk);
    echo'<br>Method do while';
}
?>
</main>
<footer>
<h2>Тип вёрстки - А.</h2>
</footer>
</body>
</html>