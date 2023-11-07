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
       Первый катет <input type="text" name="n">
       Второй катет <input type="text" name="m">
       <input type="submit">
    </form>

    <?php
    $a2 = $_POST['n'];
    $b2 = $_POST['m'];
    $x = $a2*$b2/2;
    echo $x;
    ?>
 
</body>
</html>