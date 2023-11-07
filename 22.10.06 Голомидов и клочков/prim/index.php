<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="number" name='x' placeholder="x">
        <input type="number" name='y' placeholder="y">
        <input type="submit" name='submit4'>
    </form>
    <?php
    if(isset($_GET['submit4'])){ 
        if($_GET['x'] + $_GET['y']>20){
            echo 'x^2*3= ' . pow($_GET['x'],2)*3;
        } else{
            echo 'y^3= ' . pow($_GET['y'],3);
        }
    }
    ?>

</body>
</html>