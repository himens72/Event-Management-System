<?php
session_start();
//echo "hi";
include 'connection/conn.php';
if(isset($_SESSION['userid'])) 
 {
//	 echo "hi";
if(isset($_POST['save']))
{
//	echo "ji";
$userid=$_SESSION['userid'];
$date=$_POST['date'];
$phone=$_POST['phone'];
$college=$_POST['college'];
$sql1=$con->query("UPDATE participant_signup SET phone = '$phone',date='$date',college='$college' WHERE userid = '$userid'");	
header("Location:../profile.php");
//echo $userid;
//echo $date;
//echo $phone;
//echo $college;
}
	}
?>