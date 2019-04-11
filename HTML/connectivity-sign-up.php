<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'ems');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());





if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
echo "Successfully connected to your database…";
}

function NewUser()
{
	$name = $_POST['name'];
	$college = $_POST['college'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$query = "INSERT INTO participant_signup (name,college,phone,email,password) VALUES ('$_POST[name]','$_POST[college]','$_POST[phone]','$_POST[email]','$_POST[password]')";
	$data = mysqli_query ($query)or die(mysqli_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['name']))   
{
	$query = mysql_query("SELECT * FROM participant_signup WHERE name = '$_POST[name]' AND password = '$_POST[password]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		NewUser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>