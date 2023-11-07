<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
</head>
<body>
    <?php
    echo '2 вариант<br>Зад1<br>';
    for($i=10;$i<=20;$i++){
        echo "$i <br>";
    };
    echo '<br>Зад2<br>';
    
    for($i=1;$i<=9;$i++){
        echo "$i;";
    }
    echo '<br>Зад3<br>';
    for($i=1;$i<=10;$i++){
        if($i%2==1)
        continue;
        echo "$i;";
    }
    echo '<br>Зад4<br>';
    for($i=5;$i>=1;$i--){
        echo $i**3;
        echo "<br>";
    }
    echo 'Часть2, 5 вариант<br>Зад1<br>';

    $a = 80;
    echo "<br>FOR<br>";
    for($i=0;$i<=$a;$i++){
        if($i%4==0){
            $sum+=$i;
        }
    }
    echo $sum;
    echo "<br>while<br>";
    $a=80;
    $b=0;
    $sum2 =0;
    while($b<=$a){
        if($b%4==0){
            $sum2+=$b;
        }
        $b++;
    }
    echo $sum2;
    echo "<br>do while<br>";

    $a =80;
    $b=0;
    $sum3 = 0;
    do{
        if($b%4==0){
            $sum3+=$b;
        }
        $b++;
    }while($b<=$a);
    echo $sum3;
    echo "<br>Зад 2<br>";

    for($i=0.1;$i<=4;$i+=0.2){
        $y = 5*$i-8*log($i);
        echo "y =$y   x= $i <br>";

    }


    ?>
    
</body>
</html>