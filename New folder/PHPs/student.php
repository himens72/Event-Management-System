<?php
	$con = mysqli_connect('localhost','root','','student') or die (mysqli_error());
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
		echo "NOt Connected";
	}
	session_start();
	$a = $_POST['rollno'];
	echo $a;
	$sql = "SELECT * FROM student WHERE Roll No='$a'";
	$result = $con->query($sql);
	
	$array = $result->fetch_array(MYSQLI_ASSOC);
	$num = $result->num_rows;
	if($num == 0)
	{
		header('Location:../errorstudentview.php');	
	}
	else 
	{
		$rollno=$array["Roll No"];
		$_SESSION['IsValid']=true;	
		$_SESSION['Roll No']=$rollno;	
		header('Location:../studentview.php');
	}
?>