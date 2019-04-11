<?php session_start();
 if(isset($_SESSION['userid'])) {
header('Location:index1.php');
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Event Management System | Club Sign up</title>
<!-- Custom Theme files -->
<link href="css/csignupstyle.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Checkbox Background Signup Form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
<script>
function passwordForm() 
{
    var x = document.forms["csignup"]["cpassword"].value;
	var y = document.forms["csignup"]["cfpassword"].value;
	 var x1 = document.forms["csignup"]["csecurity"].value;
	var y1 = document.forms["csignup"]["cfsecurity"].value;
	 var x2 = document.forms["csignup"]["cmoderator"].value;
	var y2 = document.forms["csignup"]["cfmoderator"].value;
    if (x != y) 
		{
        alert("Enter Password Doesn't Match");
        return false;
  		}
	if (x1 != y1) 
		{
        alert("Enter Security Code Doesn't Match");
        return false;
  		}
	if (x2 != y2) 
		{
        alert("Enter Moderator Password Doesn't Match");
        return false;
  		}
}
</script>
</head>
<body >
<div class="logo">
<img src="images/logo.png">
</div>
<!--signup page start here-->
<h2>Club Signup Form</h2>
<div class="signup">
		<span class="ribben">CREATE AN ACCOUNT</span>
	<form  name="csignup" method="post" action="PHPs/Connect_Club_SignUp.php" onsubmit="return passwordForm()">
    	<p>Club Name : <span class="dot"> </span></p>
		<input type="text" name="club" placeholder="" required="">

        <p>Email : <span class="dot"> </span></p>
		<input type="text" name="cemail" placeholder="example@email.com" required="">
		<p>Choose Password : <span class="dot"> </span></p>
	 	<input type="password" placeholder="" name="cpassword" required="">
	 	<p>Confirm Password <span class="dot"> </span></p>
	 	<input type="password" name="cfpassword" placeholder="" required="">
	 	<p>Security Code : <span class="dot"> </span></p>
	 	<input type="text" placeholder="" name="csecurity" required="">
        <p>Confirm Security Code : <span class="dot"> </span></p>
	 	<input type="text"  name="cfsecurity" placeholder="" required="">
	 	<p>Moderator Password <span class="dot"> </span></p>
	 	<input type="password" placeholder="" name="cmoderator" required="">
		<p>Confirm Moderator Password <span class="dot"> </span></p>
	 	<input type="password"  name="cfmoderator" placeholder="" required="">
        <input type="submit" value="REGISTER NOW!" name="cRegister">
</form>
</div>
<div class="copyright">
  
  <div><p><a href="index.php">Event Management System</a></p> </div>
</div>
<!--signup page end here-->
</body>
</html>