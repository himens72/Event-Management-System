<?php
	session_start();

if(isset($_SESSION['userid'])) { 	
	include 'connection/conn.php';
	$a = $_SESSION['userid'];
	if(!isset($_SESSION['cname']))
	{
	$sql = "SELECT * FROM participant_signup WHERE userid='$a'";
	$result = $con->query($sql);
	$array = $result->fetch_array(MYSQLI_BOTH);	
	$imageData=$array["image"];
	echo $imageData;
	}
	else
	{
		$sql = "SELECT * FROM club_signup WHERE userid='$a'";
	$result = $con->query($sql);
	$array = $result->fetch_array(MYSQLI_BOTH);	
	$imageData=$array["image"];
	echo $imageData;
	}	
}
?>