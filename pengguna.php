<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="manager"){
	header('location:admin.php');

}else{
	$username = $_SESSION['username']; 
	$level=$_SESSION['level'];
}
?>
<body style="background: url(pic1.jpg);">
	<title>index</title>
<div align='center'>
  <h1 style="text-align: center; font-family: sans-serif; color: red;">Selamat Datang  <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div></h1> 
</head>
<body><center>
	
	<h1 style="text-align: center; font-family: sans-serif; color: #A52A2A;">View Product</h1>
	<?php
		include 'connect.php';
		$getProduct = $connection ->query("SELECT * FROM product");
		while ($fetchProduct = $getProduct ->fetch_assoc()) {	
	?>

	<table style="display:inline-table;width:200px">
		<tr>
			<td><img style="width: 100%" src="<?=$fetchProduct["image"]?>"></td>
		</tr>
		<tr>
			<td>
				<strong><?=$fetchProduct["name"]?></strong><br>
				IDR <?=number_format($fetchProduct["price"])?>
				<br>
				<br>
				<?=$fetchProduct["description"]?>

			</td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
	</table>

	<?php
		}
	?>

</center>
</body>

