<?php session_start();
 if(isset($_SESSION['userid'])) {
header('Location:index1.php');
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Event Management System | Club Sign In</title>
<link href="css/cloginstyle.css" rel="stylesheet" type="text/css" media="all"/>
<!--Google Fonts-->

<!--Google Fonts-->
<script src="js/jquery.min3.js"></script>
</head>
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>$(document).ready(function(c) {
	$('.whit-close').on('click', function(c){
		$('.login').fadeOut('slow', function(c){
	  		$('.login').remove();
		});
	});	  
});
</script>
<script src="js/jquery.min3.js"></script>
<body>
	<h1>Club Sign In</h1>
<div class="login">
	<div class="login-top">
		<div class="whit-close"><a href="Login.php"><img src="images/close.png" alt=""></a></div>
		<h2>Event Management System</h2>
	</div>
	<div class="login-bottom">
		<h3>Enter your Details</h3>
	  <form action="PHPs/Connect_Club_SignIn.php" method="post">
		<input type="text"  value="Email Id" name="cemail" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Id';}">
		<input type="password" value="Password" name="cpassword" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
        <input type="text" value="Security Code" name="csecurity" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}">
		<h4><a href="#">Forgot Password?</a></h4>
		<label class="checkbox"><input type="checkbox" name="checkbox" checked><i> </i> Stay signed in</label>
	    <input type="submit" value="Login Now!" name="LogIn" />
	  </form>
	</div>
	 <p><a href="Club SignUp.php">Create new ID </a></p>
</div>	
<div class="copyright">
	<p><a href="index.php" target="-blank">Event Management System</a></p>
</div>	
</body>
</html>