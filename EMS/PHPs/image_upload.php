<?php
 session_start();
 if(isset($_SESSION['userid'])) 
 {
	if(isset($_POST['submit']))
	{
		include 'connection/conn.php';
		$userid=$_SESSION['userid'];
		$imageName = mysqli_real_escape_string($con,$_FILES['image']['name']);
		$imageData = mysqli_real_escape_string($con,file_get_contents($_FILES['image']['tmp_name']));
		$imageType = mysqli_real_escape_string($con,$_FILES['image']['type']);
		if(substr($imageType,0,5) == 'image')
		{
		//$sql1=$con->query("UPDATE participant_signup SET image='$imageData WHERE userid=$userid"); 
		if(!isset($_SESSION['cname']))
		{
		$sql1=$con->query("UPDATE participant_signup SET image = '$imageData' WHERE userid = '$userid'");	
		header("Location:../profile.php");
		}
		else
		{
			$sql1=$con->query("UPDATE club_signup SET image = '$imageData' WHERE userid = '$userid'");	
		header("Location:../profile.php");	
		}
		}
	}
	if(isset($_POST['delete']))
	{
	include 'connection/conn.php';
		$userid=$_SESSION['userid'];
			if(!isset($_SESSION['cname']))
		{
		$sql = "SELECT * FROM deletephoto";
		$result = $con->query($sql);
		$array = $result->fetch_array(MYSQLI_BOTH);
		$num = $result->num_rows;
		$imageData=$array['image1'];
		$sql1=$con->query("UPDATE participant_signup SET image = '$imageData' WHERE userid = '$userid'");	
		header("Location:../profile.php");
		}
		else
		{
		$sql = "SELECT * FROM deletephoto";
		$result = $con->query($sql);
		$array = $result->fetch_array(MYSQLI_BOTH);
		$num = $result->num_rows;
		$imageData=$array['image1'];
		
		$sql=$con->query("UPDATE club_signup SET image = '$imageData' WHERE userid = '$userid'");	
		header("Location:../profile.php");	
		
		}
		

	}

 }
?>