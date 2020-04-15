<?php

// echo("<pre>");
// print_r($products);
// echo("</pre>");

?>

<div class="col-sm-6 col-md-6 col-lg-4">
	<article class="card mb-4">
		<div class="card-top">

		<?php
			if($product["sale"]){
				echo('<div class="card-top__sale">Sale</div>');
			};

			if($product["new"]){
				echo('<div class="card-top__new">Новинка</div>');
			};
		
		?>

			<!-- <div class="card-top__sale">Sale</div> -->
			<!-- <div class="card__new">Новинка</div> -->

			<div class="card-top__cat"><?php echo($product["category"]) ?></div>
		</div>
		<div class="product-img">
			<img src="img/products/<?php echo($product["img"]) ?>">
		</div>
		<div class="card-body">
			<h4 class="item-title"><a href="product-page.html"><?php echo($product["title"]) ?></a></h4>
			<div class="card-btn">
				<div class="card-btn__price">
				<?php echo($product["price"]) ?> ₽
				</div>
				<div class="card-btn__btn">
					Купить
				</div>
			</div>
		</div>
	</article>
</div>