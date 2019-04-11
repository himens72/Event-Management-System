<?php session_start();
 if(isset($_SESSION['userid'])) {
header('Location:index1.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Event Management System | Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
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
              </form>
              </div>
              </div>
		</div>
		</div>
		<div class="container">
				<div class="top-nav">
				
					<ul class="nav nav-pills nav-justified">
						<li class="active"><a href="index.php"> Home </a></li>
						<li><a href="about1.php" > About </a></li>
						<li><a href="UpComing Event.php" > Upcoming Event</a></li>
						<li><a href="Gallery.php" >Gallery</a></li>						
						<li><a href="contact.php" >Contact</a></li>
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
<div class="content">
	<div class="content-top-at">
	<div class="container">
		<div class="content-top">
			<h1>Welcome</h1>
			<p>Event Mangement System is website which helps user to know about upcoming events<br>Welcome..... </p>
		</div>
		<div class="about-us">
			<div class="col-md-6 grids">
				<img class="img-responsive" src="images/we.jpg" alt="">
			</div>
			<div class="col-md-6 grids1">
				<h5>It is a long established fact that a reader will be distracted by the readable content of a page.</h5>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words
					, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				<a href="#" class="hvr-rectangle-out">More</a>
			</div>
			 <div class="clearfix"></div>
		</div>
		
		
	</div>
</div>

<div class="about-grid">
	<div class="container">
		<div class="col-md-3 about-grid1">
			<label>1000</label>
			<b></b>
			<span>Likes on Faceebook</span>
		</div>
		<div class="col-md-3 about-grid1">
			<label>101</label>
			<b></b>
			<span>Participant User</span>
		</div>
		<div class="col-md-3 about-grid1">
			<label>10</label>
			<b></b>
			<span>Club User</span>
		</div>
		<div class="col-md-3 about-grid1">
			<label>550</label>
			<b></b>
			<span>Follower</span>
		</div>
		<div class="clearfix"> </div>
 </div>
 </div>
 <div class="container">
 	<div class="services">
 		<div class="service-top">
				<h2>Our Features</h2>
			<p>Our features helps the user to create events and advertise it.<br> User also buy credits for advertising the event.</p>
			</div>
			<div class="service-bottom">
				<div class="col-md-6 service-grid-top">
					<div class="col-md-2 service-grid1">
						<img  src="images/se.png" alt="">
					</div>
					<div class="col-md-10 service-grid">
						<p>Create Events<br>This feature helps you to cretae events which are going to take place in future</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 service-grid-top">
					<div class="col-md-2 service-grid1">
						<img  src="images/se1.png" alt="">
					</div>
					<div class="col-md-10 service-grid">
						<p>Upcoming Events<br>Here you can find which events are going to take place in future </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="service-bottom">
				<div class="col-md-6 service-grid-top">
					<div class="col-md-2 service-grid1">
						<img  src="images/se2.png" alt="">
					</div>
					<div class="col-md-10 service-grid">
						<p>Advertisment<br>This feature helps you advertise the events<br>nsa</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 service-grid-top">
					<div class="col-md-2 service-grid1">
						<img  src="images/se3.png" alt="">
					</div>
					<div class="col-md-10 service-grid">
						<p>Buy Units<br>A<br>B</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
 	</div>
 </div>
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
						</script>	</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
					<p>
Event Management System</p>
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