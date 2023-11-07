<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<form method="get">
    <h1>Заказ пиццы</h1>
    <select name="PizzaType" id="Select">
            <option value="Маргарита">Маргарита</option>
            <option value="4 сыра">4 сыра</option>
            <option value="Пепперони">Пепперони</option>
            <option value="Мясная">Мясная</option>
            <option value="Чизбургер">Чизбургер</option>
            <option value="3 мяса">3 мяса</option>
        </select>
    </select>
    <label id='op'><p class='type'>Выберите размер</p><p class='type'>Обязательно</p></label>
    <div><input type="radio" name="Size" id="" value='Маленькая-25см'> Маленькая-25см 300р
    <input type="radio" name="Size" id="" value='Средняя-30см'> Средняя-30см 500р
    <input type="radio" name="Size" id="" value='Большая-35см'> Большая-35см 600р
</div>
    <p class='type'>Тесто</p>
    <div><input type="radio" name="Bread" id="" value='Тонкое'> Тонкое
    <input type="radio" name="Bread" id="" value='Стандартное'> Стандартное
    <input type="radio" name="Bread" id="" value='Сырное'> Сырное(+100р)</div>
    <p class='type'>Добавки(необязательно)</p>
    <div>
        <label><input type="radio" name="Add" id="" value='Больше сыра'> Больше сыра</label>
        <label for=""> <input type="radio" name="Add" id="" value='Больше мяса'> Больше мяса</label>
        <label for=""> <input type="radio" name="Add" id="" value='Больше овощей'> Больше овощей</label>
   
</div><br>
<p class='type'>Сырный борт+100руб</p>
<input type="checkbox" name="Cheeze" id="">
<p class='type'>На сколько человек</p>
<input type="number" name="ValPers" id="" min='1' max='10'>
<p class='type'>Куда(адресс)</p>
<textarea name="Kuda" ></textarea>
    <input type="submit" name='Button' value="Заказать">
</form>

<?php
 if(isset($_GET['Button'])&&isset($_GET['Size'])){
    $itogo = 0;
    echo('<div class="chek"><h1>Ваш заказ</h1>');
    echo('<label id="op"><p class="type">Пицца</p><p>'. $_GET['PizzaType'] .'</p></label>');
    echo('<label id="op"><p class="type">Размер</p><p>'. $_GET['Size'] .'</p></label>');
    if($_GET['Size']=='Маленькая-25см'){
        $itogo +=300;
    }
    if($_GET['Size']=='Средняя-30см'){
        $itogo +=500;
    }
    if($_GET['Size']=='Большая-35см'){
        $itogo +=300;
    }
    echo('<label id="op"><p class="type">Тесто</p><p>'. $_GET['Bread'] .'</p></label>');
    if($_GET['Bread']=='Тонкое'){
        $itogo +=0;
    }
    if($_GET['Bread']=='Стандартное'){
        $itogo +=0;
    }
    if($_GET['Bread']=='Сырное'){
        $itogo +=100;
    }
    if(isset($_GET['Add'])){
        echo('<label id="op"><p class="type">Добавки</p><p>'. $_GET['Bread'] .'</p></label>'); 
        $itogo +=100;
    }
    if(isset($_GET['Cheeze'])){
        echo('<label id="op"><p class="type">Сырная кромка</p><p>'. 'Есть'.'</p></label>'); 
        $itogo+=100;
    }
    echo('<label id="op"><p class="type">На сколько человек:</p><p>'. $_GET['ValPers'] .'</p></label>'); 
    echo('<label id="op"><p class="type">Куда:</p><p>'. $_GET['Kuda'] .'</p></label>');
    echo('<hr>');
    echo('<label id="op"><p class="type" bold>Итого:</p><p>'. $itogo .'</p></label>');
    echo('</div>');
 } else{

    var_dump('Не введены все значения!');
 }


?>
    
</body>
</html>