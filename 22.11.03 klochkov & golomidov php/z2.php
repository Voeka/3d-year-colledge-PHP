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
        X = <input type="text" name='x'><br>
        Y = <input type="text" name="y"><br>
        <input type="submit">
    </form>
<?php
$x=$_POST['x'];
$y=$_POST['y'];
if($x+$y>=20){
    $x=3*$x**2;
    $y=$y**3;
    echo 'x = ',$x;
    echo '<br>';
    echo 'y = ',$y;
}
?>    
</body>
</html>