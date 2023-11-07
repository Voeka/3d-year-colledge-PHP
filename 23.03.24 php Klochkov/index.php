<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Задание 1</h1>
    <?php
    $name = 'Danila';
    echo("Привет! Меня зовут $name, приятно познакомиться!<br>");
    $cats = ['Barsik', 'Kota', 'Brotan','RushB'];
    foreach($cats as $cat){
        echo $cat.'<br>';
    }
    var_dump($cats);
    echo '<br><br>';
    print_r($cats);
    echo '<br><br>';
    $movies = array('one'=>['name'=>'Bond','rating'=>5],'two'=>['name'=>'Batman','rating'=>1],'trie'=>['name'=>'Dice','rating'=>10]);
   
   var_dump($movies);
   echo '<br><br>';

   foreach($movies as $movi){
    $a=0;
    echo 'Фильм:';
    foreach($movi as $nr){
        if($a==0){
        echo $nr.', Рейтинг';
        $a=1;}
        else{
            echo $nr.'/10<br>';
        }
    }
   }
   ?>
   <h1>Задание 2</h1>

   <form method="get" name="forma">
    <input type="text" name="secname"><br>
    <input type="submit" value="Check">
   </form>
    
    <?php
        $name3 = $_GET['secname'];

        if($name3=='Поттер'or$name3=='Грейнджер'or$name3=='Уизли'){
            echo '«Гриффиндор»';
        }
        else if($name3=='Малфой'or$name3=='Снейп'or$name3=='Реддл'){
            echo '«Слизерин»';
        }else{
            echo '«Маггл»';
        }
    
    ?>
    <br><hr>
    <form method="post">
        <label>Имя</label><input type="text" name="name"><br>
        
        <label>Почта</label><input type="email" name="email"><br>
        
        <label>пароль</label><input type="password" name="password"><br>
    <input type="submit">
    </form>
    <?
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($name!=''and$email!=''and$password!=''){
        echo'Вы зарегестрировались!';
    }else echo 'error';
    ?>
    <h1>Задание 3</h1>
    <table border="1px">
        <?php
            for($i=1;$i<10;$i++){
                echo '<tr>';
                for($j=1;$j<10;$j++){
                    echo '<td>';
                    echo '<a href="#">';
                    echo "$i x $j= ".$i*$j;
                    echo '</a>';
                    echo '</td>';
                }
                echo '</tr>';
            }
        ?>
    </table>


    <br> <br><h3>2 часть</h3>

            <?php
            echo '<a href="https://www.google.com/">Gooogle</a><br>';
            echo '<a href="http://www.netklacc.ru/do/">Netklass</a><br>';
            
           
            echo '<a href="https://www.flaticon.com/">Flaticon</a>';
            ?>
</body>
</html>