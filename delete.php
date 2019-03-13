<?php
	session_start();

	if (isset($_GET["id"]))
	{
		include 'connect.php';

		$connection ->query("DELETE FROM product WHERE id = ".$_GET["id"]);

	}	
	header("location:admin.php");
	exit();	
?>