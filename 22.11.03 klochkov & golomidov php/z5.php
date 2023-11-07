<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" method="POST">
        A = <input type="text" name='x'><br>
        B = <input type="text" name="y"><br>
        <input type="submit">
    </form>
<?php
$x=$_POST['x'];
$y=$_POST['y'];
if($x*$x>100){
    $x=$x**2;
    $y=$y*2;
}elseif($y*$y>100){
    $y=$y**2;
    $x=$x*2;
}
echo 'a = ',$x;
echo '<br>';
echo 'b = ',$y;

?>    
</body>
</html>