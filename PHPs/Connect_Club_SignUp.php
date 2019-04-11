<?php
include 'connection/conn.php';
if(isset($_POST['cRegister']))
{
	session_start();
	$Club=$_POST['club'];
	$CEmail=$_POST['cemail'];
	$CPassword=$_POST['cpassword'];
	$CSecurity=$_POST['csecurity'];
	$CModerator=$_POST['cmoderator'];
		
	$sql=$con->query("INSERT INTO club_signup(club,cemail,cpassword,csecurity,cmoderator)Values('{$Club}','{$CEmail}','{$CPassword}','{$CSecurity}','{$CModerator}')");	
	//echo "Inserted";
	header('Location:../index1.php');
}
?>