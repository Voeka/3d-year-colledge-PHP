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
for($i=0;$i<20;$i++){
    $p[$i] = random_int(-200,200);
}
$ple = count($p);


var_dump($p);
echo('<br>');
for($i=0;$i<$ple;$i++){
    if($p[$i]>0){
        $p[$i]=$p[$i]*$p[$i];
    }
}
var_dump($p);
echo('<br><h2>zad2</h2>');

for($i=0;$i<10;$i++){
    $r[$i]= random_int(0,2);
}
var_dump($r);
echo("<br>");

for($i=0;$i<count($r);$i++){
    if($r[$i]==0){
        $r[$i]=1;
    }
}
var_dump($r);
echo('<br>');
echo('<br><h2>zad3</h2>');
for($i=0;$i<18;$i++){
    $x[$i]= random_int(-10,10);
}
var_dump($x);
$n =5;
for($i=0;$i<count($x);$i++){
    if($x[$i]>0){
        $x[$i]*=$n;
    }
    else{
        $x[$i]=0;
    }
}
echo('<br>');
var_dump($x);
echo('<br>');
echo('<br><h2>zad4</h2>');

for($i=0;$i<15;$i++){
    $y[$i]=random_int(-10,10);
}
var_dump($y);
echo('<br>');

for($i=0;$i<count($y);$i++){
    if($y[$i]<0){
        $y[$i]*=$y[$i];
    }
}
var_dump($y);
echo('<br>');
echo('<br><h2>zad5</h2>');
for($i=0;$i<15;$i++){
    $a[$i]=random_int(-10,10);
}
var_dump($a);
echo('<br>');

for($i=0;$i<count($a);$i++){
    if($a[$i]<0){
        $a[$i]*=$a[$i];
    }
    else{
        $a[$i]=sqrt($a[$i]);
    }
}
var_dump($a);
?>
    
</body>
</html>