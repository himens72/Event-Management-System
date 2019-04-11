<?php
$con = mysqli_connect('localhost','root','','ems') or die (mysqli_error());
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
else
{
	if(isset($_POST['LogIn']))
	{
		$em=$_POST['email'];
		$pw=$_POST['password'];
		
	$result=$con->query("Select * from participant_signup where email='$em' AND password='$pw'");	
	 $row = $result->fetch_array(MYSQLI_BOTH);
	
			 session_start();
	 		$_SESSION["user_id"]=$row['user_id'];
	 
		header('Location: Connection_Sign.php');
		
	
	
}
}

?>