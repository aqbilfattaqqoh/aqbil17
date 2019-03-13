<?php
	session_start();

	if (!isset($_GET["id"])) {
		header("location:view.php");
		exit();
	}
	include 'connect.php';

	$id = $_GET["id"];

	$getData = $connection ->query("SELECT * FROM product WHERE id =".$id);
	if($getData ->num_rows==0){
		header("location:view.php");
		exit();
	}

	$getData = $getData ->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<body style="background: url(pic1.jpg);">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<title>Aplikasi CRUD</title>
</head>
<body>

<div class="loginbox">
    <img src="avatar.png" class="avatar">
        
        <form action="perbaruiproduct.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=$_GET["id"]?>">
            <p>Nama Proudct</p>
            <input type="text" class="form-control" name="name" value="<?=$getData["name"]?>">
            <p>Deskripsi Product</p>
            <input type="text" class="form-control" name="description" value="<?=$getData["description"]?>">
			<p>Harga Produk </p>
			<input type="text" name="price" value="<?=$getData["price"]?>">
			<p>Gambar Produk </p> <br>
			<input type="file" name="image">
            <input type="submit" name="" value="Save">
           
        </form>
        
    </div>

	<?php
		if (isset($_SESSION["message"])) {
			echo $_SESSION["message"];
			unset($_SESSION["message"]);
			}
	?>
</body>
</html>