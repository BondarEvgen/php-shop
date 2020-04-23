<?php
	require("./config.php");


	session_start();

		if( !isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
			// echo('Success');
			header('location: index.php');
		}

		// $title = $_POST["title"];
		// $price = $_POST["price"];
		// $description = $_POST["description"];
		// $category = $_POST["category"];
		// $sale = $_POST["sale"];
		// $new = $_POST["new"];

	// print_r($price);

		if($_POST["sale"] == "") {
			$_POST["sale"] = null ;
		}

		if($_POST["new"] == "") {
			$_POST["new"] = null ;
		echo 'dfsdfsfsfsdfs';
		
		}


		
	// $sql="INSERT INTO products(title, price, description, category, sale, new)
	//  VALUES ( '$title', $price , '$description' , '$category', '$sale', '$new')";

	
	$sql="INSERT INTO products(title, price, description, category, sale, new)
	 					VALUES (:title, :price, :description, :category, :sale, :new)";

	print_r($sql);


	$stmt=$db->prepare($sql);

	$stmt->bindValue(":title", $_POST["title"]);
	$stmt->bindValue(":price", $_POST["price"]);
	$stmt->bindValue(":description", $_POST["description"]);
	$stmt->bindValue(":category", $_POST["category"]);
	$stmt->bindValue(":sale", $sale);
	$stmt->bindValue(":new", $new);

	$stmt->execute();