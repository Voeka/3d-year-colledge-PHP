<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <form method='get' name='A'>
        <p>ФИО: <input type="text" name='FIO' id='InName'></p>
        <p>N группы: <input type="text" name='NGroup' id="InGroup"></p>
        
        <p>Первое значение: <input type="number" name='VA' id="InA"></p>
        
        <p>Второе значение: <input type="number" name='VB' id="InB"></p>
        
        <p>Третье значение: <input type="number" name='VC' id="InC"></p>

        <p>Тип задачи:</p>
        <select name='ZadTY' id="InSelect">
            <option value="A1">Площадь треугольника</option>
            <option value="A2">Периметр треугольника</option>
            <option value="A3">Объем параллелепипеда</option>
            <option value="A4">Среднее арифметическое</option>
            <option value="A5">Площадь трапеции</option>
            <option value="A6">Объём цилиндра</option>
        </select>

        <p>Отправить на е-маил: 
        <input type="checkbox" name="EmailChe" id="InRadEm"></p>
        <p id='InEmail'>Ваш е-маил: <input type="email" name='Email' id="InEmail"></p>

        <select name='SelTy' id="InSelType">
            <option value="B1">Для просмотра в браузере</option>
            <option value="B2">Для печати</option>
        </select><br><br>
        <input type="submit" name='Button' value="Проверить">
    </form>
    <?php
    if(isset($_GET['Button'])){

        $ValA = $_GET['VA'];
        $ValB = $_GET['VB'];
        $ValC = $_GET['VC'];
        if($ValA==''){
            $ValA=1;
        }
        if($ValB==''){
            $ValB=1;
        }
        if($ValC==''){
            $ValC=1;
        }
        $Fio= $_GET['FIO'];
        $Gro=$_GET['NGroup'];

        echo('<div class ="NewBe">Выполнил: '.$Fio.'<br>');
        echo('Группы: '.$Gro.'<br>');

        if($_GET['EmailChe']){
            $Email=$_GET['Email'];
            echo('Результат был отправлен на почту: ' . $Email.'<br>');
        }
        if($_GET['SelTy']=='B1'){
            echo('В браузере'.'<br>');
        }
        if($_GET['SelTy']=='B2'){
            echo('Ввиде для печати'.'<br>');
        }

        if($_GET['ZadTY']=='A1'){
            echo ('Площадь треугольника равна: '. $ValA*$ValB/2);
        }
         if($_GET['ZadTY']=='A2'){
            echo ('Периметр треугольника равен: '. $ValA+$ValB+$ValC);
        }
         if($_GET['ZadTY']=='A3'){
            echo ('Объем параллелепипеда равно: '. $ValA*$ValB*$ValC);
        }
         if($_GET['ZadTY']=='A4'){
            echo ('Среднее арифметическое равно: '. ($ValA+$ValB+$ValC)/3);
        }
         if($_GET['ZadTY']=='A5'){
            echo ('Площадь трапеции равен: '. (($ValA*$ValB)/2)*$ValC);
        }
         if($_GET['ZadTY']=='A6'){
            echo ('Объём цилиндра равен: '. pi()*($ValA^2)* $ValB);
        }
        echo('</div>');
    }

    ?>

    <script>
$('#InEmail').hide();

        $('#InRadEm').click(function(){
                if ($('#InRadEm').is(':checked')){
                $('#InEmail').show();
            } else {
                $('#InEmail').hide();
            }
        })
        
    </script>
</body>
</html>