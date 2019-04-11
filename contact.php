<?php session_start();
 if(isset($_SESSION['userid'])) {
header('Location:index1.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Event Management System | Contact Us</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
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
		<div class="container">
				<div class="top-nav">
				
					<ul class="nav nav-pills nav-justified">
						<li ><a href="index.php" > Home </a></li>
						<li><a href="about1.php" > About </a></li>
						<li><a href="UpComing Event.php" >Upcoming Events</a></li>
						<li><a href="Gallery.php" >Gallery</a></li>						
						<li class="active"><a href="contact.php" >Contact</a></li>
					<div class="clearfix"></div>
					</ul>
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>
				</div>			
		
		</div>
			<div class="container">
	<!--//header-->
	 <div class="banner">
            <div class="slider">
                   <section class="slider">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                      	<div class="col-md-8 banner-left">
                      	<img  class="img-responsive" src="images/banner.jpg" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	            <h3>Nirma University </h3>
                        <p>Institute of Technology </p>
                           </div>
                       <div class="clearfix"></div>
  	    		</li>
 	    		<li>
                      	<div class="col-md-8 banner-left">
                      	<img class="img-responsive" src="images/banner1.jpg" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	            <h3>Nirma University </h3>
                        <p>Institute of Technology </p>
                           </div>
                       <div class="clearfix"></div>
  	    		</li>
  	    		<li>
                      	<div class="col-md-8 banner-left">
                      	<img class="img-responsive" src="images/banner2.jpg" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	            <h3>Nirma University </h3>
                        <p>Institute of Technology </p>
                        </div>
                       <div class="clearfix"></div>
  	    		</li>
          </ul>
        </div>
      </section>
			  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
			  <!--FlexSlider-->
			  <script defer src="js/jquery.flexslider.js"></script>
			  <script type="text/javascript">
			    $(function(){
			      SyntaxHighlighter.all();
			    });
			    $(window).load(function(){
			      $('.flexslider').flexslider({
			        animation: "slide",
			        start: function(slider){
			          $('body').removeClass('loading');
			        }
			      });
			    });
			  </script>
			</div>
		</div>
	</div>
</div>
<!--content-->
<!-- Contact -->
			<div class="contact">
				<div class="container">
					<div class="contact-top ">
						<h1>Contact Us</h1>
					</div>		
							
					<div class="contact-grids">
						<div class="contact-form">
							<form>
								<div class="contact-bottom">
									<div class="col-md-4 in-contact">
										<span>Name :</span>
										<input type="text" class="text"  value="" >
									</div>
									<div class="col-md-4 in-contact">
										<span>Email :</span>
										<input type="text" class="text"  value="" >
									</div>
									<div class="col-md-4 in-contact">
										<span>Subject :</span>
										<input type="text" class="text"  value="" >
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
								<div class="contact-bottom-top">
									<span>Message :</span>
									<textarea> </textarea>
								</div>
								<input type="submit" value="send" />
							</form>
						</div>
							<div class="map">
							<iframe src="https://www.google.co.in/maps/place/Nirma+University/@23.1284032,72.5430163,17z/data=!3m1!4b1!4m2!3m1!1s0x395e832f45125167:0x876cb1cb23c25bdb"  allowfullscreen></iframe>						
						</div>
					</div>
					
				</div>
			</div>
			<!-- Contact -->
 <!--footer-->
 <div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
				<li><a href="Login.php">Sign In</a></li>
						<li><a href="SignUp.php">Create Account</a></li>
						<li><a href="#createevent" onClick="login1()">Create Event</a></li>
						<li><a href="UpComing Event.php">UpComing Events</a></li>
		<li><a href="#buyunit" onClick="login()">Buy Units</a></li>

                        <script>
						function login()
						{
							alert("Login First to Buy Unit");
						}
						function login1()
						{
							alert("Login First to Create Event");
						}
						</script>
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