<?php session_start();
 if(isset($_SESSION['userid'])) {
header('Location:index1.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Event Management System | Participant Sign Up</title>
<!-- Custom Theme files -->
<link href="css/psignupstyle.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
<script>
function passwordForm() 
{
    var x = document.forms["psignup"]["password"].value;
	var y = document.forms["psignup"]["confirmpassword"].value;
    var email =document.forms["psignup"]["email"].value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (x != y) {
        alert("Enter Password Properly");
        return false;
    
	}
	else
	{
		if (!filter.test(email.value)) 
		{
		alert('Please provide a valid email address');
		email.focus;
		return false;
		}
	}
}
</script>
</head>
<body>
    <div class="logo">
<img src="images/logo.png">
</div>
<!--signup page start here-->
<h2>Participant Sign Up</h2>
<div class="signup">
		<form name="psignup" action="PHPs/Connect_Participant_SignUp.php" method="post" onsubmit="return passwordForm()" >
        <span class="ribben">CREATE AN ACCOUNT</span>
		<p>Name : <span class="dot"> </span></p>
		<input type="text"  placeholder="Enter Your Name"  name="name" required/>
        <p>College: <span class="dot"> </span></p>
		<input type="text"  required name="college" />
		<p>Phone No: <span class="dot"> </span></p>
		<input type="text" placeholder="Enter Mobile Number" name="phone" pattern="[0-9]{10}" required >
        <p>Email : <span class="dot"> </span></p>
		<input type="text" placeholder="example@email.com" required name="email"  />
		<p>Choose Password : <span class="dot"> </span></p>
	 	<input type="password" placeholder="" required  name="password" />
	 	<p>Confirm Password <span class="dot"> </span></p>
	 	<input type="password" placeholder="" required name="confirmpassword" />
	 	<input type="submit" value="REGISTER NOW!" name="Register">
        </form>
</div>
<div class="copyright">
	<p><a href="index.php">Event Management System</a></p>
</div>
<!--signup page end here-->
</body>
</html>