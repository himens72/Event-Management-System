<!DOCTYPE html>
<html>
<head>
<title>Event Management System | Profile</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<style>
#header1
{
	width:30%;
	height:60%;
	background-color:white;
	float:left;
	margin-top:2%;
	margin-bottom:2%;
}
#header2
{
	width:60%;
	height:60%;
	background-color:white;
	float:left;
	margin-top:2%;
	margin-bottom:2%;
}
#header3
{
	margin-top:2%;
	width:2%;
	height:60%;
	background-color:white;
	float:left;
	}
</style>
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
                       <a href="index1.php"><input type="button" value="Home"  readonly="readonly"  ></a> 
			    </form>
              </div>
              </div>
		</div>
		</div>
				
	</div>
<!--content-->
<div class="content">
<div class="container">
<div id="header1">
<img src="images/auto.jpg">   
    </div>
    <div id="header3"></div>
  <div id="header2"><?php
//if the notice is set then display it
if(isset($notice)){echo $notice;} ?>
<form method="POST" action="">
    <table align="center">
    <tr>
    <td><h2>hiiiiiiiii</h2></td>
    </tr>
    <tr>
    &nbsp;
    </tr> 
        <tr>
            <td><h4>snsknjvbjk<h4></td>
        </tr>
    </table>
</form>
</div>
    </div>      
</div>

    </div>		<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="PHPs/profile.php">Profile</li>
                        <li><a href="PHPs/Logout.php">LogOut</a></li>
						
						<li><a href="UpComing Event1.php">UpComing Events</a></li>
						
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
		<p><a href="index1.php">Event Management System</a></p>
		</div>
		</div>
		
</body>
</html>
