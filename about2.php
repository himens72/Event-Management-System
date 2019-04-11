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
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
				</div>
						<div class="search">
					<form>
				
                <span style="padding-left:4%"><a href="PHPs/Logout.php"><input type="text" value="LogOut"  readonly ></a></span>
                    </form>
				</div>
         <div class="clearfix">
			  <div class="login">
                <form>
      <a href="profile.php"><input type="button" value="<?php if(!isset($_SESSION['cname']))echo $_SESSION['name']; else  echo $_SESSION['cname'];?>"  readonly ></a>                 </form>
              </div>
              </div>
		</div>
		</div>
		<div class="container">
				<div class="top-nav">
				
					<ul class="nav nav-pills nav-justified">
						<li ><a href="index1.php"> Home </a></li>
						<li class="active"><a href="about2.php" > About </a></li>
						<li><a href="UpComing Event1.php" >Upcoming Events</a></li>
						<li><a href="Gallery1.php" >Gallery</a></li>						
						<li><a href="contact1.php" >Contact</a></li>
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
                      	<img  class="img-responsive" src="images/banner.jpg" height="500" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	                <h3>Nirma University </h3>
                        <p>Institute of Technology </p>
                       </div>
                       <div class="clearfix"></div>
  	    		</li>
 	    		<li>
                      	<div class="col-md-8 banner-left">
                      	<img class="img-responsive" src="images/banner1.jpg" height="500" alt="">
                      	</div>
                      	<div class="col-md-4 banner-right">
    	                <h3>Nirma University </h3>
                        <p>Institute of Technology </p>
                        </div>
                       <div class="clearfix"></div>
  	    		</li>
  	    		<li>
                      	<div class="col-md-8 banner-left">
                      	<img class="img-responsive" src="images/banner2.jpg" height="550" alt="">
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
<div class="container">
 	<div class="about-top">
			<br><h1>About</h1>
			<p>The Event Management  System is basically a
website that will allow individual users as well as clubs to create their
accounts on the website. These registered users and clubs can create
event pages on the website and also advertise their events using the
online transaction system embedded in the website. This will eliminate the
need to advertise events through various means like emails and all the
advertisement can be done in one place only.</p>

	</div>
		<div class="about-row">
					<div class="col-md-6 about-row1">
						<a><img class="img-responsive " src="images/ab.jpg" alt=""></a>
					<h6>Prayojan 2015</h6>
						<p>Prayojan 2015-Operations Conclave: MAKE IN INDIA-Opportunities and Challenges.<br>Prayojan 2015, the Operations Conclave with main theme as MAKE IN INDIA-Opportunities and Challenges is being organized by the Institute of Management, Nirma University on October 31, 2015.</p></div>
					<div class="col-md-6  about-row1">
						<a><img class="img-responsive " src="images/ab1.jpg" alt=""></a>
						<h6>Arbitration Training Workshop</h6>
						<p>The Institute of Law, Nirma University is organizing two days Arbitration Training Workshop in collaboration with Chartered Institute of Arbitrators(India) for the VIII Semester students as a part of ADR Clinical Paper. The workshop focuses on the practical aspects of arbitration through mock arbitral session and simulation exercises to make the students aware about the practical nitty-gritty applied and adopted in International/domestic arbitration procedure.</p>
                        					</div>		
					<div class="clearfix"> </div>	
	</div>
	
						<div class="simply-grid">
				<h2>Our Advantages</h2>
				<div class="our-ad">
					<div class="col-md-4 so-left">
						
						<ul class="simply-left">
							<li><a><i> </i> Create Advertisment</a></li>
							<li><a><i> </i>Online Transaction</a></li>
							<li><a><i> </i>Buy Units</a></li>
						</ul>
					</div>
					<div class="col-md-4 so-left">
						<ul class="simply-left">
							<li><a><i> </i> Participant Login</a></li>
							<li><a><i> </i>   Club Login</a></li>
							<li><a><i> </i>Event Creation</a></li>
						</ul>
					</div>
					<div class="col-md-4 so-left">
						<ul class="simply-left">
							<li><a><i> </i> Subscriptions to Events</a></li>
							<li><a><i> </i>  Notification System</a></li>
							<li><a><i> </i> Units Transfer between Users</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
						<div class="our">
					<div class="col-md-5 our-in">
						<a href="#"><img class=" img-responsive" src="images/ab2.jpg" alt="">  </a>
					</div>
					<div class="col-md-7 in-our">
						<h5>What is Event Management System</h5>
					<p>The Event Management system is essentially a website that works towards
eliminating several forms of advertisement like emails which annoy the
users to no end. This system has a signup system which allows two types
of accounts of the website: individual/participant and club. Anybody can
sign up for a participant account using an email. Clubs accounts can only
be generated with the help of website administrator so as to eliminate fake
club accounts. Clubs will mostly use their accounts to advertise their events
on the website. The website creates an event page and through the event
page, advertisements are possible on the website. Initial advertisements
are free but the more the clubs want to advertise, the more they would
have to pay. The idea was to create a website where all the tasks of
managing, advertising, registering, etc can be done at the same place
without much hassle. The online transaction system of the website also
allows users to pay for registration and advertisement using the website
units which can be bought in exchange for real money.</p>
					</div>
					</div>
					<div class="clearfix"> </div>
				</div>
  </div>
    
</div>
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