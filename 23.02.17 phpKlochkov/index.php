<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // prim 1
    echo('<h2>prim1</h2>');
    $arr = [1,2,3,4,5];
    $lenght = count($arr);

    for($i=0;$i<=$lenght;$i++){
        $arr[$i] = $arr[$i]*2;
    }
    var_dump($arr);

    // prim 2
    echo('<br>'.'<h2>prim2</h2>');

    $ar2 =[1,2,3,4,5];
    $le2 =count($arr);

    for($i=0;$i<$le2;$i++){
        $ar2[$i]+=5;
    }

    var_dump($ar2);
// zadania
    echo('<br>'.'<h2>zadania</h2>');

    for($i=0;$i<5;$i++){
        $ar3[$i] = random_int(1,10);
        $ar3[$i] = $ar3[$i]*$ar3[$i];
    }
   
    var_dump($ar3);
    // zadania2
    echo('<br>'.'<h2>zadania2</h2>');
    for($i=0;$i<5;$i++){
        $ar4[$i] = random_int(1,10);
        $ar4[$i] = $ar4[$i]-1;
    }
    var_dump($ar4);
// zadania3
echo('<br>'.'<h2>zadania3</h2>');
for($i=0;$i<5;$i++){
    $ar5[$i] = random_int(1,10);
    $ar5[$i] = $ar5[$i]+10;
}
var_dump($ar5);
// prim3
echo('<br>'.'<h2>primer3</h2>');

$ar6 =[1,2,3,4,5];
$le6 = count($ar6);

for($i=1;$i<$le6;$i++){
    echo($ar6[$i-1]+$ar6[$i]);
}

// zadania4
echo('<br>'.'<h2>zadania4</h2>');

for($i=0;$i<6;$i++){
    $ar7[$i] = random_int(1,200);
    echo($ar7[$i].'<br>');
}

// zadania5
echo('<br>'.'<h2>zadania5</h2>');
$ar8 = [1,2,3,4,5,6,7,8];
$le8 = count($ar8);

for($i=2;$i<=$le8;$i++){
    echo($ar8[$i-2].','.$ar8[$i-1].'<br>');
}

// zadania6
echo('<br>'.'<h2>zadania6</h2>');

$ar9 = [1,2,3,4,5,6,7,8];
$le9 = count($ar9);

for($i=1;$i<=$le9;$i++){
    echo($ar9[$i-1]+$ar9[$i]+$ar9[$i+1].'<br>');
}

// prim4
echo('<br>'.'<h2>primer4</h2>');

for($i=5;$i>=1;$i--){
    $str='';
    for($j=0;$j<$i;$j++){
        $str .='x';
    }
    echo($str.'<br>');
}

// zadania7
echo('<br>'.'<h2>zadania7</h2>');
for($i=9;$i>=1;$i--){
    $str='';
    for($j=0;$j<$i;$j++){
        $str .=$i;
    }
    echo($str.'<br>');
}
    ?>
</body>
</html>