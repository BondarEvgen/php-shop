<?php
	$pageTitle = "Главная страница";
	include("./templates/_head.php");
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
							for($i = 0; $i <= 5; $i++){

								include("./templates/_prodact-item.php");
							};
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
