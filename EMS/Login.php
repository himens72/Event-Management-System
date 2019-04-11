<?php session_start();
 if(isset($_SESSION['userid'])) {
header('Location:index1.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Event Management System | Sign In</title>
<link href="css/loginstyle.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Shade Login Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script src="js/jquery.min.js"></script>
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
<script src="js/jquery.min1.js"></script>
<body>
<h1>Account Sign In</h1>
<div class="login">
	<div class="login-top">
		<div class="whit-close"><a href="index.php"><img src="images/close.png" alt=""></a></div>
		<h2>Event Management System</h2>
	</div>
    <div class="login-middle">
   	<a href="Participant Login.php"><input type="button" value="Participant Login"/></a>
	<a href="Club Login.php"><input type="button" value="Club Login"/></a>
	   
   </div>
	 <p><a href="SignUp.php">Create new ID </a></p>
</div>
<div class="copyright">
	<p><a href="index.php" target="-blank">Event Management System</a></p>
</div>
</body>
</html>