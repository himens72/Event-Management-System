<?php session_start();
  if(!isset($_SESSION['userid'])) {
header('Location:index.php');
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
					<a href="index1.php"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="search">
					<form>
				
                <span style="padding-left:4%"><a href="PHPs/Logout.php"><input type="text" value="LogOut"  readonly ></a></span>
                    </form>
				</div>
               
			<div class="clearfix">
			  <div class="login">
                <form>
               <a href="profile.php"><input type="button" value="<?php if(!isset($_SESSION['cname']))echo $_SESSION['name']; else  echo $_SESSION['cname'];?>"  readonly ></a> 
                </form>
              </div>
              </div>
		</div>
		</div>
		<div class="container">
				<div class="top-nav">
				
					<ul class="nav nav-pills nav-justified">
						<li class="active"><a href="index1.php"> Home </a></li>
						<li><a href="about2.php" > About </a></li>
						<li><a href="UpComing Event1.php" > Upcoming Events</a></li>
						<li><a href="Gallery1.php" >Gallery</a></li>						
						<li><a href="Contact1.php" >Contact</a></li>
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
    	                <h3>Nirma University</h3>
                        <p>Institute of Technology</p>
                       </div>
                       <div class="clearfix"></div>
  	    		</li>
 	    		<li>
                      	<div class="col-md-8 banner-left">
                      	<img class="img-responsive" src="images/banner1.jpg" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	                <h3>Nirma University</h3>
                        <p>Institute of Technology</p>
                       </div>
                       <div class="clearfix"></div>
  	    		</li>
  	    		<li>
                      	<div class="col-md-8 banner-left">
                      	<img class="img-responsive" src="images/banner2.jpg" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	                <h3>Nirma University</h3>
                        <p>Institute of Technology</p>
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
			<p>Browse through several Events on the website or create your own Event Pages to  advertise your Events. </p>		</div>
		<div class="about-us">
			<div class="col-md-6 grids">
				<img class="img-responsive" src="images/we.jpg" alt="">
			</div>
			<div class="col-md-6 grids1">
				<h5>NUiCONE 2015</h5>
				<p>Nirma University International Conference on Engineering NUiCONE is a flagship event of the Institute of Technology, Nirma University, Ahmedabad. This conference follows successful organization of four national conferences and four international conferences in previous years. Last conference of this series -- NUiCONE-2013 -- was very successful with more than 750 research papers submitted, out of which approx. 200 papers were down-selected and presented after the rigorous reviews including plagiarism checks and blind-fold technical reviews by multiple reviewers. The expert speakers and conference delegates were from all across India and abroad covering researchers and eminent experts from academia, industry such as GE, Mitsubishi, ATE India, Linde etc ,and government R&D organizations like IPR, ISRO, PRL and BISAG.</p>
                <p>NUiCONE-2015 will also have exciting new set of events specially to enable and attract increased participation by practicing engineers, technologists and technopreneurs from industry through special knowledge sharing sessions involving applied technical papers by industry participants based on case-study applications, white-papers, panel discussions, industrial exhibitions of innovations and technology products etc.</p>
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
			<p>Our features helps the user to create Events and Advertise it.<br> Users can also buy credits for advertising the event.</p>
			</div>
			<div class="service-bottom">
				<div class="col-md-6 service-grid-top">
					<div class="col-md-2 service-grid1">
						<img  src="images/se.png" alt="">
					</div>
					<div class="col-md-10 service-grid">
						<p>Create Your Event Page<br>The first step to gain publicity for your Events.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 service-grid-top">
					<div class="col-md-2 service-grid1">
						<img  src="images/se1.png" alt="">
					</div>
					<div class="col-md-10 service-grid">
						<p>Upcoming Events<br>Browse through several Events on the website.</p>
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
						<p>Advertise Event<br>Popularise your Events through advertisment.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 service-grid-top">
					<div class="col-md-2 service-grid1">
						<img  src="images/se3.png" alt="">
					</div>
					<div class="col-md-10 service-grid">
						<p>Buy Units<br>Online transaction system allows you to buy units for registration and advertisment.</p>
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
						<li><a href="PHPs/Logout.php">LogOut</a></li>
						<li><a href="CreateEventForm.php">Create Event</a></li>
						<li><a href="UpComing Event1.php">UpComing Events</a></li>
						<li><a><form action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="<?php echo $_SESSION['email']; ?>">

<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="Advertisement Cost">
<input type="hidden" name="amount" value="500">
<input type="hidden" name="currency_code" value="USD">

<!-- Provide a dropdown menu option field. -->
<input type="hidden" name="on0" value="Type">Buy Units<br />
<select name="os0">
<option value="Select a type">-- Select amount --</option>
<option value="1 Day ">5 Units</option>
<option value="2 Days">10 Units</option>
<option value="3 Days">15 Units</option>
<option value="4 Days">20 Units</option>
</select> <br />

<!-- Display the payment button. -->
<input type="image" name="submit" border="0"
src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
alt="PayPal - The safer, easier way to pay online">

<img alt="" border="0" width="1" height="1"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form></a></li>	
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
						<li><a href="https://www.facebook.com/"><i> </i></a></li>						
						<li><a href="#"><i class="google"> </i></a></li>
						<li><a href="#"><i class="dribbble"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p><a href="index1.php">Event Management System</a></p>
		</div>
		</div>
</body>
</html>