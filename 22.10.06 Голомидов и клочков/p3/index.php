<?php
$shop = true;

// Одна инструкция
if ($shop)
    echo "Иду в магазин ";
echo "Иду домой ";

// Группа инструкций
if ($shop){
    echo "Иду в магазин ";
    echo "Покупаю хлеб ";
} 
echo "Иду домой";
?>