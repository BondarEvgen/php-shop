
<?php


// Создаем подключение к базе данных
$db = new PDO('mysql:host=localhost;dbname=php-shop;charset=utf8','root','');

// Делаем запрос к базе 
$sql = "SELECT * FROM products";

// Записываем в переменную данные

$result = $db->query($sql);

// Преобразуем result в ассациотивный массив

$products = $result->fetchAll(PDO::FETCH_ASSOC);


echo("<pre>");
print_r($products);
echo("</pre>");