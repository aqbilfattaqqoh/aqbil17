<?php
session_start();
if(!isset($_SESSION['username'])){
    die("Silahkan Login Terlebih Dahulu");
}

if($_SESSION['level']!="admin"){
	header('location:pengguna.php');

}else{
	$username = $_SESSION['username']; 
	$level=$_SESSION['level'];
}
?>
<style type="text/css">
<!--
.aaa {
	padding: 5px;
	height: auto;
	width: auto;
}
-->
</style>
<body style="background: url(pic1.jpg);">
	<title>Admin</title>
<div align='center'>
  <h1 style="text-align: center; font-family: sans-serif; color: red;">Selamat Datang <?php echo $level;?> <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div></h1> 
</head>
<body><center>
	<a href="insert.php"><input name="Masukan Product" type="submit" value="Masukan Product" class="aaa">
</a>
	<h1>View Product</h1>
    <?php
		include 'connect.php';
		$getProduct = $connection ->query("SELECT * FROM product");
		while ($fetchProduct = $getProduct ->fetch_assoc()) {	
	?>
	<table width="300" border="0" cellpadding="2" cellspacing="5">
      <tr>
        <td><img style="width: 100%" src="<?=$fetchProduct["image"]?>"></td>
      </tr>
      <tr>
        <td><?=$fetchProduct["name"]?></td>
      </tr>
      <tr>
        <td>RP. <?=number_format($fetchProduct["price"])?></td>
      </tr>
      <tr>
        <td><?=$fetchProduct["description"]?></td>
      </tr>
      <tr>
        <td align="center"><a href="perbarui.php?id=<?=$fetchProduct["id"]?>"><button>Update</button></a>
				<a href="delete.php?id=<?=$fetchProduct["id"]?>"><button>Delete</button></a></td>
      </tr>
    </table>
	



  <?php
		}
	?>

</center>
</body>
