<?php session_start();
 if(isset($_SESSION['userid'])) {
header('Location:index1.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Event Management System | </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marry Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

</head>
<body>
<!--header-->

	<div class="header">
	
			<div class="header-top">
				<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="search">
					<form>
						
					</form>
				</div>
			<div class="clearfix">
            <div class="login">
                <form>
                <a href="Login.php"><input type="button" value="Sign In"></a>
              </form></div>
            </div>
		</div>
		</div>
		
	<!--//header-->
	
<!--content-->
<div class="container" style="background-color:white">

</div>


 <!--footer-->
 <div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="Login.php">Sign In</a></li>
						<li><a href="SignUp.php">Create Account</a></li>
						<li><a href="#">Create Event</a></li>
						<li><a href="Upcoming Events.php">UpComing Events</a></li>
						<li><a href="#">Buy Units</a></li>	
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				<p>Event Management System</p>
					<p>Nirma University</p>
					<p>Office :  +91-8690267513</p>	
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Follow Us</h4>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="google"> </i></a></li>
						<li><a href="#"><i class="dribbble"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p><a href="index.php">Event Management System</a></p>
		</div>
		</div>
</body>
</html>