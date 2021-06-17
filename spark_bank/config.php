<?php
	$db_host = 'localhost';
	$db_user =  "root";
	$db_pasword = "";
	$db_name = 'spark_bank';

	$con = mysqli_connect($db_host,$db_user,$db_pasword,$db_name);

	if($con)
	{
		echo("City Bank");
	}
	else
	{
		echo("no connection");
	}
 ?>