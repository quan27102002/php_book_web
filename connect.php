<?php 
	$connect = mysqli_connect("localhost", "root", "", "book");
	if (!$connect) {
	    die('Connect Error (' . mysqli_connect_errno() . ') '
	            . mysqli_connect_error());
	}

 ?>