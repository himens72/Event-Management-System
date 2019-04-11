<?php
include 'connection/conn.php';

	session_start();
	if(isset( $_SESSION["user_id"]))
	{

	}
	else
	{
	header('Location:../sessiondemo.php');
	}
	
	


?>