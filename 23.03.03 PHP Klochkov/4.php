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

    for($i =2;$i<100;$i++){
        for($j=2;$j<$i;$j++){
            if(($i%$j)!=0){
                continue;
            }
            else{
                $flag = true;
                break;
            }
        }
        if(!$flag) echo "$i ";
        $flag = false;

    }
    ?>
    
</body>
</html>