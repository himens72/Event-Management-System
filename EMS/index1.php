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
    	                <h3>Lorem Ipsum is simply dummy text </h3>
                        <p>Allquam tincidunt mauris cu risus</p>
                       </div>
                       <div class="clearfix"></div>
  	    		</li>
 	    		<li>
                      	<div class="col-md-8 banner-left">
                      	<img class="img-responsive" src="images/banner1.jpg" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	                <h3>Lorem Ipsum is simply dummy text </h3>
                        <p>Allquam tincidunt mauris cu risus</p>
                       </div>
                       <div class="clearfix"></div>
  	    		</li>
  	    		<li>
                      	<div class="col-md-8 banner-left">
                      	<img class="img-responsive" src="images/banner2.jpg" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	                <h3>Lorem Ipsum is simply dummy text </h3>
                        <p>Allquam tincidunt mauris cu risus</p>
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
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
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
			<label>6800</label>
			<b></b>
			<span>popular Belief</span>
		</div>
		<div class="col-md-3 about-grid1">
			<label>1800</label>
			<b></b>
			<span>Adipiscing Elit</span>
		</div>
		<div class="col-md-3 about-grid1">
			<label>7000</label>
			<b></b>
			<span>Eiusmod Tempor</span>
		</div>
		<div class="col-md-3 about-grid1">
			<label>5500</label>
			<b></b>
			<span>Eaque Ipsa Quae</span>
		</div>
		<div class="clearfix"> </div>
 </div>
 </div>
 <div class="container">
 	<div class="services">
 		<div class="service-top">
				<h2>Our Features</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
			</div>
			<div class="service-bottom">
				<div class="col-md-6 service-grid-top">
					<div class="col-md-2 service-grid1">
						<img  src="images/se.png" alt="">
					</div>
					<div class="col-md-10 service-grid">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 service-grid-top">
					<div class="col-md-2 service-grid1">
						<img  src="images/se1.png" alt="">
					</div>
					<div class="col-md-10 service-grid">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 service-grid-top">
					<div class="col-md-2 service-grid1">
						<img  src="images/se3.png" alt="">
					</div>
					<div class="col-md-10 service-grid">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
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
		<p><a href="index1.php">Event Management System</a></p>
		</div>
		</div>
</body>
</html>