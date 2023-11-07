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
$answer = 'yes';
if ($answer == 'yes'){
    echo 'Продалжаем работу';
}
elseif ($answer=='no'){
    echo 'Завершить работу';
} else{
    echo 'Некоректный ввод';
}

?>    
</body>
</html>