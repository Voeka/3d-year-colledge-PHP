<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" name="form">
<label>Номер месяца(1-12) <input type="text" name="n"></label><br>
<input type="submit">
</form>


<?php
$i =$_POST['n'];

switch($i){
    case 1:
        echo "Январь"; break;
    case 2:
        echo "Февраль"; break;
    case 3:
        echo "Март"; break;
    case 4:
        echo "Апрель"; break;
    case 5:
        echo "Май"; break;
    case 6:
        echo "Июнь"; break;
    case 7:
        echo "Июль"; break;
    case 8:
        echo "Август"; break;
    case 9:
        echo "Сентябрь"; break;
    case 10:
        echo "Октябрь"; break;
    case 11:
        echo "Ноябрь"; break;
    case 12:
        echo "Декабрь"; break;
    default:
        echo "Неизвестный месяц";
            
}

?>
    
</body>
</html>