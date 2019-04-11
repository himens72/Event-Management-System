<?php session_start();
 if(isset($_SESSION['userid'])) {
header('Location:index1.php');
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Event Management System | Account Sign Up</title>
<!-- Custom Theme files -->
<link href="css/signupstyle.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<script src="js/jquery.min2.js"></script>
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
<script src="js/jquery.min2.js"></script>
<body>
	<h1>Account Sign Up Form</h1>
<div class="login">
	<div class="login-top">
		<div class="whit-close"><a href="index.php"><img src="images/close.png" alt=""></a></div>
		<h2>Event Management System</h2>
	</div>
    <div class="login-middle">
   	<a href="ParticipantSignUp.php"><input type="button" value="Participant Sign Up"/></a>
	<a href="Club SignUp.php"><input type="button" value="Club Sign Up"/></a>
	   
   </div>
</div>	
<div class="copyright">
	<p><a href="index.php" target="-blank">Event Management System</a></p>
</div>	
</body>
</html>