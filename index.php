<?php
	$pageTitle = "Главная страница";

	include("./templates/_head.php");

	require('./config.php');

	// require("./config.php")
?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<?php include("./templates/_header.php")?>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<!-- Left aside -->
				<?php
					include("./templates/_aside.php");
				?>
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-9 col-lg-10">
					<div class="row">

						<!-- Товар 1 -->
						<?php

						
								// include("./product-filter.php");
								
$filteredProducts = [];

// Делаем запрос к базе 
$sql = "SELECT * FROM products";

// Записываем в переменную данные

$result = $db->query($sql);

// Преобразуем result в ассациотивный массив

$responsData= $result->fetchAll(PDO::FETCH_ASSOC);

$dataFromGET = $_GET;

// print_r($_GET);



if($dataFromGET["category"] == "all"){
  $filteredProducts = $responsData;
  // header("location: index.php");

} 
elseif ($dataFromGET["category"] == "telefons") {
  foreach($responsData as $item) {
    if($item["category"] == 'telefons') {
      array_push($filteredProducts, $item);
      
    }
  }
  // header("location: index.php");
}
elseif ($dataFromGET["category"] == "tablet") {

  foreach($responsData as $item) {
    if($item["category"] == "tablet") {
      array_push($filteredProducts, $item);
    }
  }
  // header("location: index.php");

}
elseif ($dataFromGET["category"] == "laptop") {

  foreach($responsData as $item) {
    if($item["category"] == "laptop") {
      array_push($filteredProducts, $item);
    }
  }
  // header("location: index.php");

}
elseif ($dataFromGET["category"] == "computer") {

  foreach($responsData as $item) {
    if($item["category"] == "computer") {
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






								foreach($filteredProducts as $product){
									include("./templates/_prodact-item.php");
									
								};

							// for($i = 0; $i <= 5; $i++){

							// 	include("./templates/_prodact-item.php");
							// };
						?>
						<!-- // Товар 1 -->

					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

<?php
	include("./templates/_footer.php");
?>
