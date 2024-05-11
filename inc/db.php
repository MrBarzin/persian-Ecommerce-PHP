<?php

$connection = mysqli_connect("localhost:3306","root","","mobile");
	if (mysqli_connect_error()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}

?>
