<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<body style="background: url(pic1.jpg);">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<title>Simple CRUD</title>
</head>
<body>
	
	
	<div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Tambah Product</h1>
        <form action="tambahproduct.php" method="post" enctype="multipart/form-data">
            <p>Nama Proudct</p>
            <input type="text" class="form-control" name="name"> 
            <p>Deskripsi Product</p>
            <input type="text" class="form-control" name="description"> 
			<p>Harga Produk </p>
			<input type="text" name="price">
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