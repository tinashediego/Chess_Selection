<?php

	$host = "localhost";
	$username = "root";
	$pass = "";
	$database = "crud";

	$con = mysqli_connect($host,$username,$pass,$database);

	if($con){
		//echo"bhoo";
	}else{
		echo "bhoo here?";
	}

?>