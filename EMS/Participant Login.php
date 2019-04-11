<?php session_start();
 if(isset($_SESSION['userid'])) {
header('Location:index1.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Event Management System | Participant Sign In</title>
<link href="css/ploginstyle.css" rel="stylesheet" type="text/css" media="all"/>
<!--Google Fonts-->

<!--Google Fonts-->
<script src="js/jquery.min4.js"></script>
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
<script src="js/jquery.min4.js"></script>
<body>
	<h1>Participant Sign In</h1>
<div class="login">
	<div class="login-top">
		<div class="whit-close"><a href="Login.php"><img src="images/close.png" alt=""></a></div>
		<h2>Event Management System</h2>
	</div>
	<div class="login-bottom">
		<h3>Enter your Details</h3>
	  <form method="post" action="PHPs/Connect_Participant_SignIn.php" onSubmit="return checkField()">
		<input type="text" id = "myEmail1" value="Email Id" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Id';}">
		<input type="password" id = "myPW1"value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<h4><a href="#">Forgot Password?</a></h4>
		<label class="checkbox"><input type="checkbox" name="checkbox" checked><i> </i> Stay signed in</label>
	    <input type="submit" value="Login Now!" name="LogIn"  />
	  <script>
	  function checkField()
	  {
		  var email=document.getElementById("myEmail1").value;
		  var password=document.getElementById("myPW1").value;
		  if($email==null || $password==null)
		  {
			  alert("Email or Password Field is empty");
			return false;
		  }
		  else
		  {
			  return true;
		  }
	  }
	  
	  </script>
      </form>
	</div>
	 <p><a href="ParticipantSignUp.php">Create new ID </a></p>
</div>	
<div class="copyright">
	<p><a href="index.php" target="-blank">Event Management System</a></p>
</div>	
</body>
</html>