<?php
	$connection = mysqli_connect("localhost", "mydb_user", "admin123");
	$bd = mysqli_select_db("test_range_save");
	mysqli_query(" SET NAMES 'utf8' ");

	if(!$connection || !$bd)
	{
		exit(mysqli_error());
	}

?>
