<?php
$con = mysqli_connect('localhost','root','','ems') or die (mysqli_error());
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
else
{
	if(isset($_POST['Register']))
	{
		session_start();
		$Name=$_POST['name'];
		$College=$_POST['college'];
		$Phone=$_POST['phone'];
		$Email=$_POST['email'];
		$Password=$_POST['password'];
		
	$sql=$con->query("INSERT INTO participant_signup(name,college,phone,email,password)Values('{$Name}','{$College}','{$Phone}','{$Email}','{$Password}')");	
	header('Location: Participant Login.html');
	}
	
}

?>