<?php
	include 'connection/conn.php';
	session_start();	
	$a = $_POST['email'];
	$b = $_POST['password'];
	
	$sql = "SELECT * FROM participant_signup WHERE email='$a' AND password = '$b'";
	$result = $con->query($sql);
	$array = $result->fetch_array(MYSQLI_BOTH);
	$num = $result->num_rows;
	if($num == 0)
	{
		header('Location:../Participant Login.php');	
	}
	else 
	{		
		$userid=$array["userid"];
	  	$name=$array["name"];
		$email=$array["email"];
		$_SESSION['IsValid']=true;
	 	$_SESSION['userid']=$userid;
		$_SESSION['name']=$name;
		$_SESSION['email']=$email;
			
	}	
if(isset($_SESSION['userid'])) {
header('Location:../index1.php');	

}

?>