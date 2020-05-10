<?php

require('./config.php');

// include('./get-data.php');
$filteredProducts = [];

// Делаем запрос к базе 
$sql = "SELECT * FROM products";

// Записываем в переменную данные

$result = $db->query($sql);

// Преобразуем result в ассациотивный массив

$responsData= $result->fetchAll(PDO::FETCH_ASSOC);

$dataFromGET = $_GET;

print_r($_GET);



if($dataFromGET["category"] == "all"){
  $filteredProducts = $responsData;
  // header("location: index.php");

} 
elseif ($dataFromGET["category"] == "telefons") {
  foreach($responsData as $item) {
    if($item["category"] == 'Телефоны') {
      array_push($filteredProducts, $item);
      
    }
  }
  // header("location: index.php");
}
elseif ($dataFromGET["category"] == "tablet") {

  foreach($responsData as $item) {
    if($item["category"] == "Планшеты") {
      array_push($filteredProducts, $item);
    }
  }
  // header("location: index.php");

}
elseif ($dataFromGET["category"] == "laptop") {

  foreach($responsData as $item) {
    if($item["category"] == "Ноутбуки") {
      array_push($filteredProducts, $item);
    }
  }
  // header("location: index.php");

}
elseif ($dataFromGET["category"] == "computer") {

  foreach($responsData as $item) {
    if($item["category"] == "Компьютеры") {
      array_push($filteredProducts, $item);
    }
  }
  // header("location: index.php");
  // print_r($filteredProducts);

}
else {
  $filteredProducts = $responsData;
  // header("location: index.php");
}

header("location: index.php");

// foreach($responsData as $item) {
//   if($item["category"] == 'Компьютеры') {
//     array_push($filteredProducts, $item);
//     // print_r($item);
//   }
// }




