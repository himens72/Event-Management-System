<?php
 session_start();
 if(isset($_SESSION['userid'])) 
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

?>