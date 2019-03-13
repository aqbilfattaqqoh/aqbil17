<?php
	session_start();

	if (isset($_POST["name"])) {
		include 'connect.php';

		$name	= $_POST["name"];
		$description	= $_POST["description"];
		$price	= $_POST["price"];
		$image	= $_FILES["image"];
		
		$message	= "";

		if($name==""){
			$message	= "Product Name Must Be Filled!";
		}
		elseif ($description=="") {
			$message	= "Product Description Must Be Filled!";
		}
		elseif ($price=="") {
			$message	= "Product Price Must Be Filled!";
		}
		elseif (!isset($image["tmp_name"]) || $image["tmp_name"]==""){
			$message	= "Product Image Must Be Filled!";
		}
		else{

			$filePath = "upload/".basename($image["name"]);
			move_uploaded_file($image["tmp_name"], $filePath);

			$connection ->query("INSERT INTO product VALUES(null,'".$name."','".$description."','".$price."','".$filePath."')");



		}

		$_SESSION["message"] = $message;

	}

		header("location:admin.php");
		exit(); 


?>