<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="block">
    <div class="resu">
<?php
 if( !isset($_GET['store']) )   	
    $_GET['store'] = '';  	 	
 else  	 	 	 	 	
    if( isset($_GET['key']) ) 	 	 	
        $_GET['store'].= $_GET['key'];  

    echo '<div class="result">'.$_GET['store'].'</div>'; 	 
    
    ?> 
</div>
<div class="numbers">
<a href="?key=1&store=<?php echo $_GET['store']; ?>">1</a> 
<a href="?key=2&store=<?php echo $_GET['store']; ?>">2</a> 
<a href="?key=3&store=<?php echo $_GET['store']; ?>">3</a> 
<a href="?key=4&store=<?php echo $_GET['store']; ?>">4</a> 
<a href="?key=5&store=<?php echo $_GET['store']; ?>">5</a> 
</div>
<div class="numbers">
<a href="?key=6&store=<?php echo $_GET['store']; ?>">6</a> 
<a href="?key=7&store=<?php echo $_GET['store']; ?>">7</a> 
<a href="?key=8&store=<?php echo $_GET['store']; ?>">8</a> 
<a href="?key=9&store=<?php echo $_GET['store']; ?>">9</a> 
<a href="?key=10&store=<?php echo $_GET['store']; ?>">0</a> 

</div>
<div class="reset">
<a href="?reset=Y">Сброс</a></div>

<p>
    <?php
    

        if(isset($_GET['store']) && isset($_GET['key'])){
            echo 'Длинна текста - '.strlen($_GET['store']);
        }
    ?>
</p>
</div>
</body>
</html>