<?php
$con = mysqli_connect('localhost','root','','ems') or die (mysqli_error());
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
else
{
	session_start();
	if(isset( $_SESSION["user_id"]))
	{

	}
	else
	{
	header('Location: After_Login_Home.html');
	}
	
	
}

?>