<?php session_start();
 if(!isset($_SESSION['userid'])) {
header('Location:index.php');
}
 ?>

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
<script>
function imageSize()
{
	
	
}
function imageCheck()
{
var filename=document.forms["profile"]["image"].value; 
	if(filename==NULL)
	{	
		alert("No File Exist");
		return false;
	}
	else
	{
document.getElementById("profileImage").height = "184";
	document.getElementById("profileImage").width = "165";
	return true;
	}
	
}
</script>
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
                       <a href="profile.php"><input type="button" value="<?php if(!isset($_SESSION['cname']))echo $_SESSION['name']; else  echo $_SESSION['cname'];?>"  readonly="readonly"  ></a> 
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
    <form name="profile" method="post" action="PHPs/image_upload.php" enctype="multipart/form-data" onsubmit="return imageCheck()">
        <table width="100%" height="379" border="0s">
  <tbody>
    <tr>
<td height="226" colspan="2" align="center"><img id="profileImage" src="PHPs/showimage.php"width="165" height="184"></td> 
    </tr>
    <tr>
      <td height="24" colspan="2">&nbsp;</td>
    
    </tr>
    <tr>
      <td align="center" width="50%" height="49" colspan="2"><input type="file" name="image"  ></td>
    </tr>
    <tr>
      <td height="63"><input type="submit" name="submit" value="Upload"></td>
	  </form>
    </tr>
  </tbody>
</table>
    </div>
    <div id="header3">

    </div>
        <div id="header2">
		<table width="82%" border="0" style="margin-top:10%;margin-left:5%;margin-right:10%;margin-bottom:10%">
  <tbody>
  <form method="post" action="PHPs/ProfileUpdate.php">
    <tr>
      <td width="40%" height="39" align="center"><font size="4">User Id : </font></td>
      <td width="60%"><input type="text" value="<?php echo $_SESSION['userid']; ?>"  readonly style="width:100%"></td>
    </tr>
    <tr>
      <td width="40%" height="39" align="center"><font size="4">Name : </font></td>
      <td><input type="text" style="width:100%" value="<?php if(!isset($_SESSION['cname']))echo $_SESSION['name']; else  echo $_SESSION['cname'];?>" readonly></td>
    </tr>
    <tr>
      <td width="40%" height="39" align="center"><font size="4">Birthday : </font></td>
      <td><input type="date" style="width:100%" readonly  id="text" name="date" value="<?php 
	include 'PHPs/connection/conn.php';
	  $userid=$_SESSION['userid'];
	  $sql = "SELECT * FROM participant_signup WHERE userid='$userid'";
	$result = $con->query($sql);
	$array = $result->fetch_array(MYSQLI_BOTH);
	$num = $result->num_rows;
	$date=$array['date'];
	echo $date;
	?>"></td>
    </tr>
    <tr>
      <td width="40%" height="39" align="center"><font size="4">Phone No. : </font></td>
      <td><input type="text" style="width:100%" readonly  id="text1" name="phone" value="<?php 
	  include 'PHPs/connection/conn.php';
	  $userid=$_SESSION['userid'];
	  $sql = "SELECT * FROM participant_signup WHERE userid='$userid'";
	$result = $con->query($sql);
	$array = $result->fetch_array(MYSQLI_BOTH);
	$num = $result->num_rows;
	$phone=$array['phone'];
	echo $phone;
	?>"></td>
    </tr>
    <tr>
      <td width="40%" height="39" align="center"><font size="4">College : </font></td>
      <td><input type="text" style="width:100%" readonly  id="text2" name="college" value="<?php 
	    include 'PHPs/connection/conn.php';
	  $userid=$_SESSION['userid'];
	  $sql = "SELECT * FROM participant_signup WHERE userid='$userid'";
	$result = $con->query($sql);
	$array = $result->fetch_array(MYSQLI_BOTH);
	$num = $result->num_rows;
	$college=$array['college'];
	echo $college;
	?>"></td>
    </tr>
  </tbody>
</table>
<table width="50%" border="0" align="center">
  <tbody>
    <tr>
      <td height="29" align="center"><input type="submit" name="save" value="Save" onClick="save()"></td>
      </form>
	  <script>
	  function edit()
	  {
		  var el=document.getElementById("text").removeAttribute("readonly");
		  var el1=document.getElementById("text1").removeAttribute("readonly");
		  var el2=document.getElementById("text2").removeAttribute("readonly");
	  }
	  </script>
      <td align="center"><input type="submit" name="edit" value="Edit" onClick="edit()"></td>
      <script>
	  function save()
	  {
		  var a=document.getElementById("text").value;
		  var el=document.getElementById("text").setAttribute("readonly",a);
		  var b=document.getElementById("text1").value;
		  var el1=document.getElementById("text1").setAttribute("readonly",b);
		  var c=document.getElementById("text2").value;
		  var el2=document.getElementById("text2").setAttribute("readonly",c);  
		//alert("HI");
	  window.location.assign("PHPs/ProfileUpdate.php");
	  
	  }
	  </script>
      
      <td align="center"><input type="submit" value="Cancel" onClick="cancel()"></td>
    <script>
	function cancel()
	{
	  window.location.assign("profile.php");
	}
    </script>
    </tr>
        <tr>
    <td height="15">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  </tbody>
</table>


    </div>
        
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
						<li><a href="UpComing Event.php">UpComing Events</a></li>
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
		<p><a href="index1.php">Event Management System</a></p>
		</div>
		</div>
		
</body>
</html>