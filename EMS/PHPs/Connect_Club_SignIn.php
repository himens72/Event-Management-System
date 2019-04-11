<?php

	include 'connection/conn.php';
session_start();	
	$a = $_POST['cemail'];
	$b = $_POST['cpassword'];
	$c = $_POST['csecurity'];
//	echo $a;
	
	$sql = "SELECT * FROM club_signup WHERE cemail='$a' AND cpassword = '$b' AND csecurity='$c'";
	$res = $con->query($sql);
	//echo $res;
	$array = $res->fetch_array(MYSQLI_BOTH);
	$num = $res->num_rows;
	if($num == 0)
	{
		header('Location:../Club Login.php');	
	}
	else 
	{		
		$userid=$array["userid"];
	  	$name=$array["club"];
		$email=$array["cemail"];
		$_SESSION['IsValid']=true;
	 	$_SESSION['userid']=$userid;
		$_SESSION['cname']=$name;
		$_SESSION['email']=$email;	
	
	}		
if(isset($_SESSION['userid'])) {
header('Location:../index1.php');	
//echo $_SESSION['name'];
}
	
?>