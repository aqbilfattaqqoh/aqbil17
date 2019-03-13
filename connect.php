<?php
	$connection = new mysqli("localhost","root","","aqbiluts");
	if(!$connection)
	{
		echo "Connection Error!";
		exit();
	}