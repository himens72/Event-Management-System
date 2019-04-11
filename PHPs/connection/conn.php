<?php
	$con = mysqli_connect('localhost','root','','ems') or die (mysqli_error());
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
		echo "NOt Connected";
	}
?>