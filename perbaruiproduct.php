<?php
	session_start();

	if (isset($_POST["name"])) {
		include 'connect.php';

		$id =$_POST["id"];
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
		else{

		 if
		 (isset($image["tmp_name"]) && $image["tmp_name"]!="")
		{

			$filePath = "upload/".basename($image["name"]);
			move_uploaded_file($image["tmp_name"], $filePath);

			$connection ->query("UPDATE product SET image='".$filePath."' WHERE id =".$id);
		}
			$connection ->query("UPDATE product SET name='".$name."' WHERE id =".$id);
			$connection ->query("UPDATE product SET description='".$description."' WHERE id =".$id);
			$connection ->query("UPDATE product SET price='".$price."' WHERE id =".$id);

		


		}

		$_SESSION["message"] = $message;

	header("location:admin.php?id=".$id);
		exit(); 

	}
		header("location:insert.php");
		exit();
		
?>